<?php

namespace App;

use App\Ticket;

class Init
{

    private $tickets;

    public function __construct()
    {
        add_action('init', [$this, 'create_posttypes']);
    }

    public function create_posttypes()
    {
        $this->tickets = new Ticket();
    }
}
