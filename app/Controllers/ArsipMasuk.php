<?php

namespace App\Controllers;

use App\Models\SuratMasukModel;

class ArsipMasuk extends BaseController
{
    public function index()
    {
        
    }

    public function dataarsipmasuk()
    {
        $a = new SuratMasukModel();
        $pencarian = $this->request->getVar('cari');
        if ($pencarian) {
            $hasil = $a->search($pencarian);
        }
        else {
            $hasil = $a;
        }
        /*$data = [ 
            'dataArsipMasuk' => $hasil->paginate(3,'arsipmasuk_pages'),
            'pager' => $a->pager 
        ];*/
        $b = $a->findAll();
        $data = ['dataArsipMasuk' => $b];
        echo view('DataArsip/arsip_masuk', $data);
    }
}