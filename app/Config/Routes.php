<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//Admin
$routes->get('Admin', 'Admin::index');
//Login
//$routes->get('Login', 'Login::index');

//LAN Connection Yazaki
$routes->get('Fyazaki', 'Fyazaki::index');
$routes->post('Fyazaki/add', 'Fyazaki::add');
$routes->get('Yazaki', 'Yazaki::index');
$routes->get('Yazaki/export', 'Yazaki::export');

//LAN Connection Non Yazaki
$routes->get('Fnonyazaki', 'Fnonyazaki::index');
$routes->post('Fnonyazaki/add', 'Fnonyazaki::add');
$routes->get('Nonyazaki', 'Nonyazaki::index');

//Email Account Request
$routes->get('Femail', 'Femail::index');
$routes->post('Femail/add', 'Femail::add');
$routes->get('Email', 'Email::index');

//Request Equipment IT
$routes->get('Fequipment', 'Fequipment::index');
$routes->post('Fequipment/add', 'Fequipment::add');
$routes->get('Equipment', 'Equipment::index');

//File Server Request
$routes->get('Ffileserver', 'Ffileserver::index');
$routes->post('Ffileserver/add', 'Ffileserver::add');
$routes->get('Fileserver', 'Fileserver::index');

//Request Relayout PC
$routes->get('Frequest', 'Frequest::index');
$routes->post('Frequest/add', 'Frequest::add');
$routes->get('Request', 'Request::index');

//Software Trial Request Form
$routes->get('Fsoftware', 'Fsoftware::index');
$routes->post('Fsoftware/add', 'Fsoftware::add');
$routes->get('Software', 'Software::index');

//Online Meeting Request
$routes->get('Fmeetings', 'Fmeetings::index');
$routes->post('Fmeetings/add', 'Fmeetings::add');
$routes->get('Meetings', 'Meetings::index');

//Storage Mobile Register Form
$routes->get('Fstorage', 'Fstorage::index');
$routes->post('Fstorage/add', 'Fstorage::add');
$routes->get('Storage', 'Storage::index');

//Work Request Form
$routes->get('Fwork', 'Fwork::index');
$routes->post('Fwork/add', 'Fwork::add');
$routes->get('Work', 'Work::index');

//Request Khusus Penggunaan Laptop
$routes->get('Flaptop', 'Flaptop::index');
$routes->post('Flaptop/add', 'Flaptop::add');
$routes->get('Laptop', 'Laptop::index');

//Apk dan Kontrol list
$routes->get('Fapk', 'Fapk::index');
$routes->post('Fapk/add', 'Fapk::add');
$routes->get('Apk', 'Apk::index');

//Tanda Terima Equipment IT
$routes->get('Ftanda', 'Ftanda::index');
$routes->post('Ftanda/add', 'Ftanda::add');
$routes->get('Tanda', 'Tanda::index');

//Tanda Terima
$routes->get('Ftte', 'Ftte::index');
$routes->post('Ftte/add', 'Ftte::add');
$routes->get('Tte', 'Tte::index');

//Form Permintaan Username & Password Oracle
$routes->get('Fusername', 'Fusername::index');
$routes->post('Fusername/add', 'Fusername::add');
$routes->get('Username', 'Username::index');

//Hardware Request Form
$routes->get('Fhardware', 'Fhardware::index');
$routes->post('Fhardware/add', 'Fhardware::add');
$routes->get('Hardware', 'Hardware::index');
