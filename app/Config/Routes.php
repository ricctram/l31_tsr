<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Rotte per gli utenti
$routes->get('auth/', 'Auth::index');
$routes->get('auth/login', 'Auth::login');
$routes->post('auth/login', 'Auth::login');
$routes->get('auth/logout', 'Auth::logout');
$routes->add('auth/forgot_password', 'Auth::forgot_password');
$routes->add('auth/create_user', 'Auth::create_user');
$routes->post('auth/create_user', 'Auth::create_user');
$routes->add('auth/edit_user/(:num)', 'Auth::edit_user/$1');
$routes->get('auth/delete_user/(:num)', 'Auth::delete_user/$1');
$routes->post('auth/edit_user/(:num)', 'Auth::edit_user/$1');
$routes->add('auth/create_group', 'Auth::create_group');
$routes->add('auth/edit_group/(:num)', 'Auth::edit_group/$1');
$routes->post('auth/edit_group/(:num)', 'Auth::edit_group/$1');
$routes->get('auth/delete_group/(:num)', 'Auth::delete_group/$1');
$routes->get('auth/activate/(:num)', 'Auth::activate/$1');
$routes->get('auth/activate/(:num)/(:hash)', 'Auth::activate/$1/$2');
$routes->add('auth/deactivate/(:num)', 'Auth::deactivate/$1');
$routes->get('auth/reset_password/(:hash)', 'Auth::reset_password/$1');
$routes->post('auth/reset_password/(:hash)', 'Auth::reset_password/$1');

// Rotte per gli eventi
$routes->get('evento', 'Evento::index');
$routes->get('evento/create', 'Evento::create');
$routes->post('evento/store', 'Evento::store');
$routes->get('evento/edit/(:num)', 'Evento::edit/$1');
$routes->post('evento/update/(:num)', 'Evento::update/$1');
$routes->get('evento/delete/(:num)', 'Evento::delete/$1');

// Rotte per il menu
$routes->get('menu', 'Menu::index');
$routes->get('menu/create', 'Menu::create');
$routes->post('menu/store', 'Menu::store');
$routes->get('menu/edit/(:num)', 'Menu::edit/$1');
$routes->post('menu/update/(:num)', 'Menu::update/$1');
$routes->get('menu/delete/(:num)', 'Menu::delete/$1');

// Rotte per i piatti del menu
$routes->get('menu_item', 'Menu::indexMenuItems');
$routes->get('menu_item/create', 'Menu::createMenuItem');
$routes->post('menu_item/store', 'Menu::storeMenuItem');
$routes->get('menu_item/edit/(:num)', 'Menu::editMenuItem/$1');
$routes->post('menu_item/update/(:num)', 'Menu::updateMenuItem/$1');
$routes->get('menu_item/delete/(:num)', 'Menu::deleteMenuItem/$1');

// Rotte per funzionalità generiche dell'applicazione
$routes->get('bacheca', 'Dashboard::index');
$routes->get('profilo', 'Profile::index');
//$routes->get('impostazioni', 'Settings::index');
