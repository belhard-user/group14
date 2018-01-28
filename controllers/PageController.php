<?php
namespace App;

use Core\App;
use Core\Request;

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
        $names = App::get('db')->getAll('peoples');
        
        view('peoples', ['names' => $names]);
    }

    public function addUser()
    {
        view('add-user');
    }

    public function storeUser()
    {
        $name = $_POST['name'];

        App::get('db')->insert('peoples', [
            'name' => $name,
        ]);

        Request::redirectTo('peoples');
    }
}