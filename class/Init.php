<?php

namespace App;

use App\Domain\Ticket;
// use App\Tools\SearchTools;
use App\Templater;

class Init
{

    private $temp;
    private $tickets;
    // private $search;

    public function __construct()
    {
        $this->temp = new Templater();
        add_action('init', [$this, 'create_posttypes']);
        // add_action('admin_post_soluby_handle_form', [$this, 'soluby_form_hangling']);
        // add_shortcode('soluby_search', [$this, 'soluby_search_shortcode']);
        add_shortcode('soluby_tickets_list',  [$this, 'soluby_tickets_listing']);
    }

    public function create_posttypes()
    {
        $this->tickets = new Ticket();
        // $this->search = new SearchTools();
    }

    public function soluby_search_shortcode()
    {
        return $this->temp->soluby_get_template("ticket-search.php");
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

    /**
     * 1-
     * Vérification du nonce, si tous est validé, va chercher les résultats
     * dans la fonction search_tickets
     */
    // public function soluby_form_handling()
    // {
    //     if (!isset($_POST['_nonce']) || !wp_verify_nonce($_POST['_nonce'], 'form-submit')) {
    //         wp_redirect('/');
    //     } else {
    //         $results = $this->search->search_tickets($_POST['s']);
    //         var_dump($results->posts);
    //     }
    // }
}
