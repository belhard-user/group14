<?php

class App
{
    private static $data = [];

    public static function set($key, $value)
    {
        static::$data[$key] = $value;
    }

    public static function get($key)
    {
        if(array_key_exists($key, static::$data)){
            return static::$data[$key];
        }
        
        throw new Exception("Parameter $key not found");
    }
}