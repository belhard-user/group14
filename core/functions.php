<?php

function view($template, $args = [])
{
    $twig = \Core\App::get('twig');

    $template .= '.html.twig';

    echo $twig->render($template, $args);
}