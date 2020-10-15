<?php

namespace App;


class Ticket
{

    public function __construct()
    {
        $this->create_tickets_post_type();
    }

    public function create_tickets_post_type()
    {
        $label = array(
            'name'                     => __('Tickets', '_solubyplugin'),
            'singular_name'            => __('Ticket', '_solubyplugin'),
            'menu_name'                => __('Ticket', 'Admin menu name', '_solubyplugin'),
            'add_new'                  => __('Ajouter un info', '_solubyplugin'),
            'add_new_item'             => __('Ajouter un ticket', '_solubyplugin'),
            'edit'                     => __('Editer le ticket', '_solubyplugin'),
            'edit_item'                => __('Editer les tickets', '_solubyplugin'),
            'new_item'                 => __('Nouveau ticket', '_solubyplugin'),
            'view'                     => __('Voir le ticket', '_solubyplugin'),
            'view_items'               => __('Voir les tickets', '_solubyplugin'),
            'search_items'             => __('Rechercher les tickets', '_solubyplugin'),
            'not_found'                => __('Aucun info trouvée', '_solubyplugin'),
            'not_found_in_trash'       => __('Aucun info trouvée dans la corbeille', '_solubyplugin'),
        );

        $args = array(
            'labels'              => $label,
            'public'              => true,
            'has_archive'         => true,
            'publicly_queryable'  => true,
            'show_in_menu'        => true,
            'hierarchical'        => false,
            'exclude_from_search' => false,
            'supports'            => array('title', 'editor', 'exerpt', 'thumbnail', 'page-attributes'),
            'capability_type'     => 'post',
        );
        register_post_type('soluby_ticket', $args);
    }

    static public function get_all_tickets()
    {
        $args = array(
            'post_type'      => 'soluby_ticket',
            'posts_per_page' => 1

        );

        return new \WP_Query($args);
    }
}
new Ticket();
