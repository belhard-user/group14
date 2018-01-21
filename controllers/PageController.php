<?php

class PageController
{
    public function index()
    {
        view('index');
    }

    public function about()
    {
        view('about');
    }

    public function people()
    {
        /** @var mysqli $connection */
        $connection = App::get('connection');
        $sql = 'SELECT * FROM peoples';
        $result = $connection->query($sql);
        $names = $result->fetch_all(MYSQLI_ASSOC);
        
        view('peoples', ['names' => $names]);
    }

    public function addUser()
    {
        view('add-user');
    }

    public function storeUser()
    {
        /** @var mysqli $connection */
        $connection = App::get('connection');
        $name = $_POST['name'];
        $sql = "INSERT INTO peoples(name) VALUES ('$name')";
        $connection->query($sql);

        Request::redirectTo('peoples');
    }
}