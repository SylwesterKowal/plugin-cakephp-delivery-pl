<?php

use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

Router::plugin(
    'Delivery',
    ['path' => '/delivery'],
    function (RouteBuilder $routes) {
        $routes->fallbacks('DashedRoute');
    }
);

Router::connect('/create/*', ['controller' => 'Recives', 'action' => 'index', 'plugin' => 'Delivery']);

