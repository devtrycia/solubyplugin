<?php
require __DIR__ . '/vendor/autoload.php';

/**
 * Plugin Name:     Soluby
 * Plugin URI:      http://soluby.dev.io/
 * Description:     Outil de création de ticket
 * Version:         1.0
 * Author:          Germain Thibault,Marc Vadeboncoeur,Trycia Thibodeau
 * Author URI:      http://soluby.dev.io/
 */

use App\Activator;

$activator = new Activator();

$activator->soluby_init();
