<?php
namespace Core\DB;

use PDO;

class QueryBuilder
{
    /** @var  PDO */
    private $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getAll($tableName)
    {
        $sql =  sprintf(
            'SELECT * FROM %s',
            $tableName
        );
        
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_BOTH);
    }

    public function insert(string $tbl_name, array $fields)
    {
        $fieldsName = array_keys($fields);
        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $tbl_name,
            implode(',', $fieldsName),
           trim(str_repeat('?,', count($fieldsName)), ',')
        );

        $stmt = $this->db->prepare($sql);
        
        return $stmt->execute(array_values($fields));
    }
}