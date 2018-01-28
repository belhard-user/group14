<?php
namespace Core\DB;

class DBConnector
{
    public static function getConnection($config)
    {
        return new \mysqli(
            $config['host'], 
            $config['db_user'], 
            $config['db_pwd'], 
            $config['db_database']
        );
    }
}