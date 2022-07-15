<?php

namespace App\Models;

use CodeIgniter\Model;

class CarrosModel extends Model
{
    protected $table            = 'carros';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['name','type','placa','ano'];

    protected $validationRules     = [
        'name'       => 'required',
        'type'       => 'required',
        'placa'      => 'required',
        'ano'        => 'required'
    ];
}
