<?php

namespace App\Models;

use CodeIgniter\Model;

class AlugarModel extends Model
{
    protected $table            = 'alugar';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['idCarro','idUser','turno','status','desc'];
    
    protected $validationRules      = [
        'idCarro'        => 'required',
        'turno'          => 'required',
        'status'         => 'required'
    ];
    
}