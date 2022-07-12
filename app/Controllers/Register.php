<?php

namespace App\Controllers;

class Register extends BaseController 
{
    public function index()
    {
        return view('pages/register');
    }

    public function register()
    {

        echo("teste1");

        // $admin = $_POST['adm'] ? 1 : 0;

        // echo($_POST['name'] . $_POST['pass'] . $_POST['adm'] . $admin);

        // $Registrar = new \App\Models\RegisterModel();

        // $Registrar::add($_POST['name'], $_POST['pass'], $admin);

        return view('pages/register');

        // $userModel = new UserModel();

        // $userModel -> save([
        //     'name'     => 'Gui',
        //     'password' => '123',
        //     'admin'    => 0
        // ]);

    }
}