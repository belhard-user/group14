<?php
require_once "vendor/autoload.php";

/*function foo($name, $id){
    dump(func_get_args());
}*/

class People
{
    public $id;
    public $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getFullName()
    {
        return sprintf(
            '%s-%d<br>',
            $this->name,
            $this->id
        );
    }
}


$names = [
    'Neo',
    'Trinity',
    'Tank',
    'Morpheus',
    'Dozer',
    'Smith'
];


try{
    $pdo = new PDO('mysql:host=localhost;dbname=site', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    /*$pdo->beginTransaction();
    foreach($names as $name){
        $sql = "INSERT INTO peoples (name) VALUES ('$name')";
        $pdo->exec($sql);
    }
    $pdo->commit();*/

    /*$sql = "SELECT name, id FROM peoples";

    $peoples = $pdo->query($sql)->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'People', [1, 2]);

    foreach($peoples as $people){
        echo $people->getFullName();
    }*/
}catch(PDOException $e){
    $pdo->rollBack();
    echo $e->getMessage();
}