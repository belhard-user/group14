<?php

use Core\App;
use Core\DB\DBConnector;
use Core\DB\QueryBuilder;

require_once "vendor/autoload.php";

App::set('config', require_once 'config/app.php');
$queryBuilder = new QueryBuilder(
    DBConnector::getConnection(App::get('config')['db'])
);
App::set(
    'db',
    $queryBuilder
);