<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratKeluarModel extends Model
{
    protected $table = 'surat_keluar';
    protected $primaryKey = 'id_surat';
    protected $returnType = 'array';
    //protected $useSoftDeletes = 'true';
    protected $allowedFields = ['no_surat','id_kategori','tgl_surat','perihal','tujuan','keterangan','file'];

    public function search($x)
    {
        return $this->table('surat_keluar')->like('id_surat', $x)->orLike('no_surat', $x)->orLike('tgl_surat', $x)->orLike('perihal', $x)->orLike('perihal', $x)->orLike('tujuan', $x);
    }
      public function joinsuratkeluarxkategori()
       {
        
      return $this->db->table('surat_keluar')
    ->join('kategori','surat_keluar.id_kategori=kategori.id_kategori')
    ->get()->getResultArray();
       }
     public function dropdownkategori()
       {
        
       return $this->db->table('kategori') ->get()->getResultArray();
       }

}
?>