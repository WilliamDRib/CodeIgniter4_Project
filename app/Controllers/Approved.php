<?php

namespace App\Controllers;

class Approved extends BaseController
{
    public function index()
    {
        if(!isset($_SESSION['status'])){
            return view('pages/home');
        }

        if($_SESSION['status'] != 1){
            return view('pages/home');
        }
        
        return view('pages/approved');
    }

}