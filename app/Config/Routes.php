<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');




$routes->group('login', function($routes)
{
  $routes->get('loginView', 'Account::loginView', ['as' => 'loginView']);
  $routes->post('login', 'Account::login', ['as' => 'login']);
});
$routes->group('register', function($routes)
{
  $routes->get('registerView', 'Account::registerView', ['as' => 'registerView']);
  $routes->post('register', 'Account::register', ['as' => 'register']);
});

