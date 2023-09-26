<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Login::index');
$routes->post('/loginsubmit', 'Login::submitLogin');
$routes->get('/logout', 'Login::logout');

//gua taro disini buat load form
$routes->get('/form-table', 'Home::loadFormTable');

//routes buat input data
$routes->post('/inputdata', 'Home::inputData');
