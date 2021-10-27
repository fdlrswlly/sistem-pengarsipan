<?php

namespace App\Controllers;

use App\Models\SuratKeluarModel;

class ArsipKeluar extends BaseController
{
    public function index()
    {
        
    }

    public function dataarsipkeluar()
    {
        $a = new SuratKeluarModel();
        $pencarian = $this->request->getVar('cari');
        if ($pencarian) {
            $hasil = $a->search($pencarian);
        }
        else {
            $hasil = $a;
        }
        /*$data = [ 
            'dataArsipKeluar' => $hasil->paginate(3,'arsipkeluar_pages'),
            'pager' => $a->pager 
        ];*/
        $b = $a->findAll();
        $data = ['dataArsipKeluar' => $b];
        echo view('DataArsip/arsip_keluar', $data);
    }
}