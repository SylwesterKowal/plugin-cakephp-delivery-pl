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
Router::connect('/install/*', ['controller' => 'Install', 'action' => 'index', 'plugin' => 'Delivery']);
Router::connect('/register/*', ['controller' => 'Register', 'action' => 'index', 'plugin' => 'Delivery']);

