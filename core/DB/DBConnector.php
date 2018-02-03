<?php
namespace Core\DB;

class DBConnector
{
    public static function getConnection($config)
    {
        return new \PDO(
            "mysql: host={$config['host']};dbname={$config['db_database']}",
            $config['db_user'],
            $config['db_pwd'],
            $config['options']
        );
    }
}