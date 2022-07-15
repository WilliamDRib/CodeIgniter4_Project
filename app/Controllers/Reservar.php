<?php

namespace App\Controllers;

class Reservar extends BaseController
{
    public function index()
    {
        $db = db_connect();

        $data = $db -> query('SELECT * FROM alugar');

        echo "<div class='carros'>";
        foreach ($data -> getResult() as $row) {
            if($row -> status == 0 || $row -> idUser == $_SESSION['id']){

                echo "<dl>";
                echo "<dd>Id = ". $row -> id . "</dd>";       

                $dataCarro = $db -> query('SELECT * FROM carros WHERE id ='. $row -> idCarro.'');
                $rowCarro = $dataCarro -> getRow();
                
                echo "<dd>Nome do carro = " . $rowCarro -> name . "</dd>";
                echo "<dd>Tipo = " . $rowCarro -> type . "</dd>";
                echo "<dd>Placa = " . $rowCarro -> placa . "</dd>";
                echo "<dd>Ano = " . $rowCarro -> ano . "</dd>";
                echo "<dd><img class='carro' src=" . $rowCarro -> img . "></dd>";

                echo "<dd>Turno disponivel = " . $row -> turno . "</dd>";
                echo "<dd>Descricao = ". $row -> desc . "</dd>";
                echo "<br>";

                if($row -> idUser == $_SESSION['id']){
                    echo "<dd>Alugado por voce:<br>"; 
                    echo "Para desalugar digite o mesmo id</dd>"; 
                }

                echo "</dl>";
            }
        }
        echo "</div>";

        return view('pages/reservar');
    }

    public function reservar(){
        $id   = $this -> request -> getPost('id');

        $db = db_connect();

        $test = $db -> query('SELECT * FROM alugar WHERE id='.$id.' AND status = 1');

        $a = $test -> getRow();
        
        if(!$a){
            $db -> query('UPDATE alugar SET idUser = ' . $_SESSION['id'] . ', status = 1 WHERE id = '. $id);
        }else{
            $db -> query('UPDATE alugar SET idUser = 0, status = 0 WHERE id = '. $id);
        }

        return view('pages/approved');
    }

}