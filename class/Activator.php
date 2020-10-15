<?php

namespace App;

use App\Init;

class Activator
{
    function soluby_init()
    {
        new Init();
        register_activation_hook(__FILE__, 'flush_rewrite_rules'); // Demandes de nettoyer les règles de réécrire pour prendre en compte l'activation du nouveau custom-post-type (plugin)
        register_deactivation_hook(__FILE__, 'flush_rewrite_rules'); // Demandes de nettoyer les règles de réécrire après la désactivation du nouveau custom-post-type (plugin)
    }
}
