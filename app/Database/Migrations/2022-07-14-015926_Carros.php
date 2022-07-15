<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Carros extends Migration
{
    public function up()
    {
        $this -> forge -> addField('id');
        $this -> forge -> addField([
            'name' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ],
            'type' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ],            
            'placa' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ],
            'ano' => [
                'type'          => 'INT'
            ]
        ]) -> createTable('carros');
    }

    public function down()
    {
        $this -> forge -> dropTable('carros');
    }
}
