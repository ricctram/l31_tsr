<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Rotte per il sistema di autenticazione
$routes->get('login', 'Auth::login');
$routes->post('login', 'Auth::process_login');
$routes->get('logout', 'Auth::logout');

// Rotte per funzionalità generiche dell'applicazione
$routes->get('dashboard', 'Dashboard::index');
$routes->get('profile', 'Profile::index');
$routes->get('settings', 'Settings::index');
$routes->get('about', 'About::index');

// Rotte per gli eventi
$routes->get('evento', 'Evento::index');
$routes->get('evento/create', 'Evento::create');
$routes->post('evento/store', 'Evento::store');
$routes->get('evento/edit/(:num)', 'Evento::edit/$1');
$routes->post('evento/update/(:num)', 'Evento::update/$1');
$routes->get('evento/delete/(:num)', 'Evento::delete/$1');

// Rotte per gli utenti
$routes->get('utente', 'Utente::index');
$routes->get('utente/create', 'Utente::create');
$routes->post('utente/store', 'Utente::store');
$routes->get('utente/edit/(:num)', 'Utente::edit/$1');
$routes->post('utente/update/(:num)', 'Utente::update/$1');
$routes->get('utente/delete/(:num)', 'Utente::delete/$1');

// Rotte per il menu
$routes->get('menu', 'Menu::index');
$routes->get('menu/create', 'Menu::create');
$routes->post('menu/store', 'Menu::store');
$routes->get('menu/edit/(:num)', 'Menu::edit/$1');
$routes->post('menu/update/(:num)', 'Menu::update/$1');
$routes->get('menu/delete/(:num)', 'Menu::delete/$1');

// Rotte per le prenotazioni
$routes->get('prenotazioni', 'Prenotazioni::index');
$routes->get('prenotazioni/create', 'Prenotazioni::create');
$routes->post('prenotazioni/store', 'Prenotazioni::store');
$routes->get('prenotazioni/edit/(:num)', 'Prenotazioni::edit/$1');
$routes->post('prenotazioni/update/(:num)', 'Prenotazioni::update/$1');
$routes->get('prenotazioni/delete/(:num)', 'Prenotazioni::delete/$1');
