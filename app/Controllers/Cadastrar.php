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
        $newCar['img']        = $this -> request -> getPost('img');

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

        echo "<div class='carros'>";
        foreach ($data -> getResult() as $row) {
            echo "<dl>";
                echo "<dt>Id = " . $row -> id . "</dt>";
                echo "<dd>Nome do carro = " . $row -> name . "</dd>";
                echo "<dd>Tipo = " . $row -> type . "</dd>";
                echo "<dd>Placa = " . $row -> placa . "</dd>";
                echo "<dd>Ano = " . $row -> ano . "</dd>";
                echo "<dd><img class='carro' src=" . $row -> img . "></dd>";
            echo "</dl>";
        }
        echo "</div>";

        return view('pages/anunciar');
    }

    public function anunciar(){

        $data_post['idCarro'] = $this -> request -> getPost('carro');
        $data_post['turno']   = $this -> request -> getPost('turno');
        $data_post['desc']    = $this -> request -> getPost('desc');
        $data_post['status']  = 0;
        $data_post['idUser']  = 0;

        $db = db_connect();             //Consultar se o veiculo existe
        $data = $db -> query('SELECT * FROM carros WHERE id = '.$data_post['idCarro'].'');

        try{
            if(!$data -> getResult()){
                echo("
                <script>
                    alert('Erro no registro!');
                </script>");
            }else if($this -> alugarModel -> save($data_post)){
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