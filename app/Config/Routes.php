<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('view', 'UploadImage::index');
$routes->get('create', 'UploadImage::create');

$routes->post('savedata', 'UploadImage::uploaddata');
$routes->get('dashboard', 'UploadImage::dashboard');

$routes->post('users/fileUpload', 'UploadImage::fileUpload');
