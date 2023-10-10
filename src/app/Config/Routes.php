<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('api/tasks', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'TasksApiController::index');
    $routes->get('(:num)', 'TasksApiController::show/$1');
    $routes->post('/', 'TasksApiController::create');
    $routes->put('update/(:num)', 'TasksApiController::update/$1');
    $routes->delete('delete/(:num)', 'TasksApiController::delete/$1');
});
