<?php

namespace App\Controllers;

use App\Models\KategoriModel;

class Kategori extends BaseController

{
    public function index()
{
    
}
public function input()
{
    session();
    $data = ['pesan_validasi' => \Config\Services::validation()];
    echo view('Kategori/input_kategori', $data);
}
public function simpan()
{
        $atur = $this->validate([
                    'nama_kategori' => [
                        'label' => 'Nama Kategori',
                        'rules' => 'required',
                        'errors' => [
                            'required' => '{field} tidak boleh kosong'
                    ]
                    ]
                ]); 
                if (!$atur){
                    return redirect()->to('/Kategori/input')->withInput();
                }
        
                $a = new KategoriModel(); 
                $a->insert([
                    'nama_kategori'=> $this->request->getVar('nama_kategori')
                ]); 
                session()->setFlashdata('pesan', 'Data berhasil di simpan');
                return redirect()->to('Kategori/datakategori');
            } 
        
public function datakategori()
{
    $a = new KategoriModel();
    $pencarian = $this->request->getVar('cari');
    if ($pencarian) {
        $hasil = $a->search($pencarian);
    }
    else {
        $hasil = $a;
    }
    $b = $a->findAll();
    $data = ['dataKategori' => $b];
    echo view('Kategori/kategori', $data);
}
public function edit($id_kategori)
{
    $a = new KategoriModel();
    $b = $a->find($id_kategori);
    $data = ['x'=>$b];
    echo view('Kategori/edit_kategori', $data);

}
public function proses_edit()
{
    $a = new KategoriModel();
    $id_kategori = $this->request->getVar('id_kategori');
	$a->update($id_kategori, [
        'nama_kategori' => $this->request->getVar('nama_kategori')
    ]);
    return redirect()->to('../Kategori/datakategori');
}


public function hapus($id)
{
    $a = new KategoriModel();
    $a->delete($id);
    $data['dataKategori'][]= $a;
    return redirect()->to('../Kategori/datakategori');

}
}