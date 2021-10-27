<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model 
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    //protected $useSoftDeletes = 'true';
    protected $allowedFields = ["email","username","password","role"];

    public function search($x)
{
    return $this->table('user')->like('email', $x)->orLike('username', $x)->orLike('role', $x);
}
}