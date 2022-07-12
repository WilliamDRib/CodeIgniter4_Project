<?php 

namespace App\Models;

use CodeIgniter\Model;

class RegisterModel extends Model
{

    public static function add(string $name, string $pass, int $adm)
    {
        $db = \Config\Database::connect();

        $db -> query("INSERT INTO users (name, password, admin) values (' " . $name . " ',' " . $pass . " ', " . $adm . ");");

        // $db -> query("INSERT INTO users (name, password ,admin) values (' :NAME ',' :PASS ', :ADM);" , array(
        //     ':NAME' => $name, 
        //     ':PASS' => $pass, 
        //     ':ADM'  => $adm
        // ));
    }

}