<?php

function view($template, $args = [])
{
    extract($args);

    include "views/{$template}.html.php";
}