<?php

class Request
{
    public static function getUri()
    {
        return  trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }

    public static function method()
    {
        return strtoupper($_SERVER['REQUEST_METHOD']);
    }

    public static function redirectTo($path)
    {
        header('Location: /' . $path);
        die;
    }
}