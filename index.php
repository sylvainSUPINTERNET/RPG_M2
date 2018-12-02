<?php
require __DIR__ . '/vendor/autoload.php'; // load dependencies
require __DIR__. '/loader.php'; // load my classes

/**
 * Dependencies
 */

use \Symfony\Component\HttpFoundation\Request;
use \Symfony\Component\HttpFoundation\Response;

/**
 * Custom class
 */

use src\Map;


/**
 * Init map
 */
$map = new Map();
$map->initMapSettings("easy", "winter", 20, 20);


