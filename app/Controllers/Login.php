<?php

namespace App\Controllers;

use Exception;

class Login extends BaseController
{

    public function index()
    {
        return view('pages/login');
    }   

    public function login()
    {
        $db = db_connect();

        $newUser['name']     = $this -> request -> getPost('name');
        $newUser['password'] = $this -> request -> getPost('password');

        try{

            $dados = $db -> query("SELECT * FROM users WHERE name = '" . $newUser['name'] . "' AND password = '" . $newUser['password'] . "'");
            
            $user = $dados -> getRow();

            if($user){
                
                $_SESSION['id']     = $user -> id;
                $_SESSION['name']   = $user -> name;
                $_SESSION['admin']  = $user -> admin;

                return view("pages/approved");

            }else{
                return view("pages/login");
            }       

        }catch(Exception $e){
            echo($e);
        }

        return view("pages/login");
    }

}