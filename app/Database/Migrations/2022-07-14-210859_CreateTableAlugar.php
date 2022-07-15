<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableAlugar extends Migration
{
    public function up()
    {
        $this -> forge -> addField('id');
        $this -> forge -> addField([
            'idCarro' => [
                'type'          => 'INT'
            ],
            'idUser' => [
                'type'          => 'INT'
            ],          
            'turno' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255'
            ],
            'status' => [
                'type'          => 'INT'
            ],
            'desc' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255'
            ]
        ]) -> createTable('alugar');
    }

    public function down()
    {
        $this -> forge -> dropTable('alugar');
    }
}
