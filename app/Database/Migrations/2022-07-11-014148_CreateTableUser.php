<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableUser extends Migration
{
    public function up()
    {
        $this -> forge -> addField('id');
        $this -> forge -> addField([
            'name' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ],
            'password' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ],
            'admin' => [
                'type'          => 'INT'
            ],
        ]) -> createTable('users');
    }

    public function down()
    {
        $this -> forge -> dropTable('users');
    }
}
