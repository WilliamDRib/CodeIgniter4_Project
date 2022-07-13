<?php 

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table               = 'users';
    protected $primaryKey          = 'id';
    protected $allowedFields       = ['name', 'password', 'admin'];

    protected $validationRules     = [
        'name'      => 'required|min_length[3]|is_unique[users.name]',
        'password'  => 'required|min_length[3]',
        'admin'     => 'required'
    ];
}