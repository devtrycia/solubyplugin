<?php

namespace App;

use App\Domain\Ticket;
use App\Templater;

class Init
{

    private $temp;
    private $tickets;

    public function __construct()
    {
        $this->temp = new Templater();
        add_action('init', [$this, 'create_posttypes']);
        add_shortcode('soluby_tickets_list',  [$this, 'soluby_tickets_listing']);
        add_shortcode('soluby_tickets_created',  [$this, 'soluby_tickets_create']);
        add_action('admin_post_soluby_add_ticket',  [$this, 'soluby_add_ticket']);
    }

    public function create_posttypes()
    {
        $this->tickets = new Ticket();
    }

    public function soluby_tickets_listing()
    {
        $list = $this->tickets->get_all_tickets();
        ob_start();
        if ($list->have_posts()) {
            while ($list->have_posts()) {
                $list->the_post();
                $this->temp->soluby_get_template("ticket-list.php");
            }
        }
        $content = ob_get_contents();
        ob_get_clean();
        return $content;
    }

    public function soluby_tickets_create()
    {
        return $this->temp->soluby_get_template("ticket-created.php");
    }

    public function soluby_add_ticket()
    {
        $nouveau_suivi = [
            'post_title' => "Ticket: " . $_POST['suivi']['courriel'],
            'post_content' => $_POST['suivi']['commentaires'],
            'post_status' => "publish",
            'post_date' => date('Y-m-d'),
            'post_type' => "soluby_ticket",
        ];

        $post_id = wp_insert_post($nouveau_suivi);

        update_post_meta($post_id, "soluby_email", sanitize_text_field($_POST['suivi']['courriel']));

        wp_redirect("/page-d-exemple");
    }
}
