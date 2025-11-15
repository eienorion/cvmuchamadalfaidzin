<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index'); 
$routes->get('/pendidikan', 'Pendidikan::index');
$routes->get('/pengalaman', 'Pengalaman::index');
$routes->get('/skill', 'Skill::index');
$routes->get('/portofolio', 'Portofolio::index');




