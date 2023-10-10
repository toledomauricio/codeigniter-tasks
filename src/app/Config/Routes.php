<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('api/tasks', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'TasksApi::index');
    $routes->post('/', 'TasksApi::create');
    $routes->put('update/(:num)', 'TasksApi::update/$1');
    $routes->delete('delete/(:num)', 'TasksApi::delete/$1');
});
