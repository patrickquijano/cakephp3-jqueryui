<?php

use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::plugin('JQueryUI', ['path' => '/j-query-u-i'], function (RouteBuilder $routes) {
    $routes->fallbacks(DashedRoute::class);
});
