<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model

{
    public function total_SuratMasuk()
    {
        return $this->db->table('surat_masuk')->countAll();
    }
    public function total_SuratKeluar()
    {
        return $this->db->table('surat_keluar')->countAll();
    }
    public function total_user()
    {
        return $this->db->table('user')->countAll();
    }
    public function total_ArsipMasuk()
    {
        return $this->db->table('surat_masuk')->countAll();
    }
    public function total_ArsipKeluar()
    {
        return $this->db->table('surat_keluar')->countAll();
    }
}