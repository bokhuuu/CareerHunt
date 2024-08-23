<?php
require './helpers.php';

$routes = [
    '/' => 'controllers/main.php',
    '/listings' => 'controllers/listings/index.php',
    '/listings/create' => 'controllers/listings/create.php',
    '404' => 'controllers/error/404.php'
];

$uri = str_replace('/CareerHunt', '', $_SERVER['REQUEST_URI']);

if (array_key_exists($uri, $routes)) {
    require(basePath($routes[$uri]));
} else {
    require(basePath($routes['404']));
}
