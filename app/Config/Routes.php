<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('products', 'Pages::products');
$routes->get('products/kitchen-cabinets', 'Pages::kitchenCabinets');
$routes->get('products/(:any)', 'Pages::comingSoon');
$routes->get('specials', 'Pages::comingSoon');
$routes->get('custom-build', 'Pages::comingSoon');
$routes->get('gallery', 'Pages::gallery');
$routes->get('about', 'Pages::about');
$routes->get('contact', 'Pages::contact');
