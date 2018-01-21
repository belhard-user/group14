<?php

class QueryBuilder
{
    /** @var  mysqli */
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAll($tableName)
    {
        $sql =  sprintf(
            'SELECT * FROM %s',
            $tableName
        );
        
        return $this->db->query($sql)->fetch_all(MYSQLI_ASSOC);
    }

    public function insert(string $tbl_name, array $fields)
    {
        $fieldsName = array_keys($fields);
        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $tbl_name,
            implode(',', $fieldsName),
            '\'' . implode("','", $fields) . "'"
        );

        return $this->db->query($sql);
    }
}