<?php

namespace App\Controllers;

use Exception;

class Cadastrar extends BaseController
{
    private $carModel;
    private $alugarModel;

    public function __construct()
    {
        $this -> carModel = new \App\Models\CarrosModel();
        $this -> alugarModel = new \App\Models\AlugarModel();
    }   

    public function index()
    {

        return view('pages/cadastrar');
    }

    public function listar()
    {
        $data = $this -> carModel -> findAll();
        return $this -> response -> setJSON($data);
    }

    public function cadastrarCarro()  
    {

        $newCar['name']       = $this -> request -> getPost('name');
        $newCar['type']       = $this -> request -> getPost('type');
        $newCar['placa']      = $this -> request -> getPost('placa');
        $newCar['ano']        = $this -> request -> getPost('ano');

        try{
            if($this -> carModel -> save($newCar)){
            
                return view("pages/approved");  
      
            }else{
                echo("
                <script>
                    alert('Erro no registro!');
                </script>");

                return view("pages/cadastrar_Carro");
            }

        }catch(Exception $e){
            echo ($e);
        }

    }

    public function tela_anunciar(){

        $db = db_connect();

        $data = $db -> query('SELECT * FROM carros');

        foreach ($data -> getResult() as $row) {
            echo "Id = " . $row -> id . " | ";
            echo "name = " . $row -> name . " | ";
            echo "type = " . $row -> type . " | ";
            echo "placa = " . $row -> placa . " | ";
            echo "ano = " . $row -> ano;
            echo "<br>";
        }

        return view('pages/anunciar');
    }

    public function anunciar(){

        $data_post['idCarro'] = $this -> request -> getPost('carro'); 
        $data_post['turno']   = $this -> request -> getPost('turno'); 
        $data_post['desc']    = $this -> request -> getPost('desc');
        $data_post['status']  = 0;
        $data_post['idUser']  = 0; 

        try{
            if($this -> alugarModel -> save($data_post)){
                echo("
                <script>
                    alert('Inserido!');
                </script>");     
                
            }else{
                echo("
                <script>
                    alert('Erro no registro!');
                </script>");
            }

            return view("pages/approved");


        }catch(Exception $e){
            echo ($e);
        }
    }
}