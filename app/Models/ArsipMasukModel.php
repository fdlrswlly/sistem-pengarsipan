<?php

namespace App\Models;

use CodeIgniter\Model;

class ArsipMasukModel extends Model
{
    protected $table = 'surat_masuk';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    //protected $useSoftDeletes = 'true';
    protected $allowedFields = ['id','file'];

    public function search($x)
{
    return $this->table('surat_masuk')->like('id', $x)->orLike->orLike('file', $x);
}
    
}


?>