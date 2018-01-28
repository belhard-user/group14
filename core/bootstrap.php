<?php

use Core\App;
use Core\DB\DBConnector;
use Core\DB\QueryBuilder;

require_once "vendor/autoload.php";

$loader = new Twig_Loader_Filesystem('./views');
$twig = new Twig_Environment($loader, array(
    'cache' => './compilation_cache',
    'auto_reload' => true,
    'debug' => true
));
$twig->addExtension(new Twig_Extension_Debug());

App::set('config', require_once 'config/app.php');
App::set('twig', $twig);
$queryBuilder = new QueryBuilder(
    DBConnector::getConnection(App::get('config')['db'])
);
App::set(
    'db',
    $queryBuilder
);