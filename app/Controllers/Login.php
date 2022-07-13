<?php

namespace App\Controllers;

class Login extends BaseController
{

    private $userModel;

    public function __construct()
    {
        $this -> userModel = new \App\Models\UserModel();
    }


    public function index()
    {
        return view('pages/login');
    }

    public function login()
    {

        $db = db_connect();

        $newUser['name'] = $this -> request -> getPost('name');
        $newUser['password'] = $this -> request -> getPost('password');

        $dados = $db -> query("SELECT * FROM users WHERE name = '" . $newUser['name'] . "' AND password = '" . $newUser['password'] . "'");

        $user = $dados -> getRow();
        echo($user->name);
        
        // foreach ($dados->getResultArray() as $row)  printando 
        // {
        //     echo $row['id'] . " ";
        //     echo $row['name']. " ";
        //     echo $row['password']. " ";
        //     echo $row['admin']. " ";
        //     echo "<br>";
        // }
    }
    
}