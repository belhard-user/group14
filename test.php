<?php
require_once "vendor/autoload.php";
try{
    $pdo = new PDO('mysql:host=localhost;dbname=site', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $t = 't \'2';
    $b = 'b 2';
    $sql = "SELECT * FROM news LIMIT ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([2]);
    // $stmt->execute(['title' => $t, 'body' => $b]);
//    $sql = "SELECT * FROM news";
//    $r = $pdo->prepare($sql);
//    $r->execute();
    dump($stmt->fetchAll(PDO::FETCH_OBJ));
}catch(PDOException $e){
    echo $e->getMessage();
}




/*interface INews
{
    public function getAllRecord();
}

class Oracle implements INews
{
    public function getAllRecord()
    {
        return [
            ['title' => 'title', 'body' => 'body'],
            ['title' => 'title 2', 'body' => 'body2'],
            ['title' => 'title 3', 'body' => 'body3'],
            ['title' => 'title 4', 'body' => 'body4'],
        ];
    }
}

class Msql implements INews
{
    protected $db;

    public function __construct()
    {
        $this->db = new mysqli('localhost', 'root', '', 'site');
    }

    public function getAllRecord()
    {
        $sql = "SELECT * FROM news";

        return $this->db->query($sql)->fetch_all(MYSQLI_ASSOC);
    }
}
class News
{
    private $obj;

    public function __construct(INews $obj)
    {
        $this->obj = $obj;
    }

    public function getAllRecord()
    {
        return $this->obj->getAllRecord();
    }
}


$news = new News(new Oracle());


foreach ($news->getAllRecord() as $item){
    echo "{$item['title']}<br>";
}*/