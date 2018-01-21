<?php

require_once "core/Request.php";
require_once "controllers/PageController.php";
require_once "core/Kernel.php";
require_once 'core/functions.php';
require_once "core/DB/DBConnector.php";
require_once "core/App.php";

App::set('config', require_once 'config/app.php');
App::set('connection', DBConnector::getConnection(App::get('config')['db']));