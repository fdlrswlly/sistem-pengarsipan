<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratMasukModel extends Model
{
    protected $table = 'surat_masuk';
    protected $primaryKey = 'id_surat';
    protected $returnType = 'array';
    //protected $useSoftDeletes = 'true';
    protected $allowedFields = ['no_surat','id_kategori','tgl_surat','perihal','pengirim','status','keterangan','file'];

    public function search($x)
{
    return $this->table('surat_masuk')->like('id_surat', $x)->orLike('id_kategori', $x)->orLike('no_surat', $x)->orLike('tgl_surat', $x)->orLike('perihal', $x)->orLike('pengirim', $x)->orLike('status', $x);
}
  public function joinsuratmasukxkategori()
       {
        
      return $this->db->table('surat_masuk')
    ->join('kategori','surat_masuk.id_kategori=kategori.id_kategori')
    ->get()->getResultArray();
       }
     public function dropdownkategori()
       {
        
       return $this->db->table('kategori') ->get()->getResultArray();
       }
}   


?>