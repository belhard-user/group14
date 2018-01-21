<?php
// https://habrahabr.ru/post/320710/
require_once "core/bootstrap.php";

try {
    Kernel::init()->run();
}catch(Exception $e){
    switch ($e->getCode()){
        case 404:
            // include 404 page
            header('HTTP/1.1 404 Not Found', true, 404);
            break;
    }
}