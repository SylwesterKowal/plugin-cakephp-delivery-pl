<?php
use Cake\Routing\Router;

Router::scope('/', function ($routes) {

    $routes->plugin('Delivery', function ($routes) {
        $defaultRouteClass = 'InflectedRoute';
        if (in_array(Router::defaultRouteClass(), ['DashedRoute'])) {
            $defaultRouteClass = Router::defaultRouteClass();
        }
        $routes->fallbacks($defaultRouteClass);
    });


    $routes->connect('/recive_data/*', ['controller' => 'Recives', 'action' => 'index', 'plugin' => 'Delivery']);


    $defaultRouteClass = 'InflectedRoute';
    if (in_array(Router::defaultRouteClass(), ['DashedRoute'])) {
        $defaultRouteClass = Router::defaultRouteClass();
    }
    $routes->fallbacks($defaultRouteClass);
});



