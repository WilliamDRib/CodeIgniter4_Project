<?php

namespace App\Controllers;

use App\Models\UserModel;

class Register extends BaseController
{
    public function index()
    {
        return view('pages/register');
    }

    public function register()
    {

        $userModel = new UserModel();

        // $userModel -> save([
        //     'name'     => 'Gui',
        //     'password' => '123',
        //     'admin'    => 0
        // ]);

        foreach ($userModel as $i){
            echo($i);
        }
    }
}