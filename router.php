<?php

$routes->get('', 'PageController@index');
$routes->get('about', 'PageController@about');
$routes->get('peoples', 'PageController@people');
$routes->get('add-user', 'PageController@addUser');
$routes->post('add-user', 'PageController@storeUser');
$routes->get('admin', 'Admin\IndexController@index');