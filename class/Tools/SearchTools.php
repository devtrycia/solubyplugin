<?php

namespace App\Tools;

use App\Domain\Ticket;
use WP_Query;

/**
 * Méthode
 * Requete vers woordpress avec WP_query qui permet d'aller
 * chercher tous les tickets de suivi créé à partir du
 * custom-post-type
 */

// class SearchTools
// {
//     public function __construct()
//     {
//         do_action('soluby_ticket', [$this, "search_tickets"]);
//     }

//     public function search_tickets($search_string, $category = null)
//     {
//         $args = [
//             'post_type' => 'soluby_ticket',
//             's' => $search_string,
//         ];

//         if (!is_null($category)) {
//             $args['tax_query'] =  [
//                 'relation' => 'OR',
//                 [
//                     'taxonomy' => 'category',
//                     'field'    => 'slug',
//                     'terms'    => ['project_type'],
//                 ],
//             ];
//         }
//         return new WP_Query($args);
//     }
// }
