<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'id_kategori';
    protected $returnType = 'array';
    //protected $useSoftDeletes = 'true';

    protected $allowedFields = ['id_kategori','nama_kategori'];

    public function search($x)
    {
        return $this->table('kategori')->like('id_kategori', $x)->orLike('nama_kategori', $x);
    }
}
?>