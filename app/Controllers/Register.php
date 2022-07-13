<?php

namespace App\Controllers;

use Exception;

class Register extends BaseController 
{
    private $userModel;

    public function __construct()
    {
        $this -> userModel = new \App\Models\UserModel();
    }

    public function index()
    {
        return view('pages/register');
    }

    public function listarUser()
    {
        $data = $this -> userModel -> findAll();
        return $this -> response -> setJSON($data);
    }

    public function register()  
    {

        $newUser['name']     = $this -> request -> getPost('name');
        $newUser['password'] = $this -> request -> getPost('password');
        $newUser['admin']    = $this -> request -> getPost('admin') ? 1 : 0;

        try{
            if($this -> userModel -> save($newUser)){
                // return view("pages/home");
                return \App\Controllers\Register::listarUser();
            }else{
                echo("Erro");
                return \App\Controllers\Register::index();
            }

        }catch(Exception $e){
            echo ($e -> getMessage());
        }

    }
}