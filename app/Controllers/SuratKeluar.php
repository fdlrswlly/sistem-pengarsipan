<?php

namespace App\Controllers;

use App\Models\SuratKeluarModel;

class SuratKeluar extends BaseController

{
    public function index()
{
    
}
public function input()
{
    session();
      $a = new SuratKeluarModel();
    $data = [
         'dropdown'=>$a->dropdownkategori(),
        'pesan_validasi' => \Config\Services::validation()];
    echo view('SuratKeluar/input_surat_keluar', $data);
}
public function simpan()
{
        $atur = $this->validate([
                    'no_surat' => [
                        'label' => 'No Surat',
                        'rules' => 'required',
                        'errors' => [
                            'required' => '{field} tidak boleh kosong'
                    ]
                    ],
                    
                    'perihal' => [
                        'label' => 'Perihal',
                        'rules' => 'required',
                        'errors' => [
                            'required' => '{field} tidak boleh kosong'
                    ]
                    ],
                    'tujuan' => [
                        'label' => 'Tujuan',
                        'rules' => 'required',
                        'errors' => [
                            'required' => '{field} tidak boleh kosong'
                    ]
                    ]
                ]); 
                if (!$atur){
                    return redirect()->to('/SuratKeluar/input')->withInput();
                }
        
                $a = new SuratKeluarModel();
                $ambilFile = $this->request->getFile('file');
                $namaFile = $ambilFile->getName();
                $a->insert([
                    'id_surat'=> $this->request->getVar('id_surat'),
                    'no_surat'=> $this->request->getVar('no_surat'),
                    'tgl_surat'=> $this->request->getVar('tgl_surat'),
                    'perihal'=> $this->request->getVar('perihal'),
                    'tujuan'=> $this->request->getVar('tujuan'),
                    'id_kategori'=> $this->request->getVar('kategori'),
                    'keterangan'=> $this->request->getVar('keterangan'),
                    'file' =>$namaFile
                ]); 
                $ambilFile->move('file_upload/',$namaFile);
                session()->setFlashdata('pesan', 'Data berhasil di simpan');
                return redirect()->to('SuratKeluar/datasuratkeluar');
            } 
public function edit($id)
{
    $a = new SuratKeluarModel();
    $b = $a->find($id);
    
    $data = [
        'dropdown'=>$a->dropdownkategori(),
        'x'=>$b
    ];
    echo view('SuratKeluar/edit_surat_keluar', $data);
 
}
public function proses_edit()
{
    $a = new SuratKeluarModel();
    $ambilFile = $this->request->getFile('file');
    $namaFile = $ambilFile->getName();
    $id = $this->request->getVar('id');
	$a->update($id, [
        'no_surat' => $this->request->getVar('no_surat'),
        'tgl_surat' => $this->request->getVar('tgl_surat'),
        'perihal' => $this->request->getVar('perihal'),
        'tujuan' => $this->request->getVar('tujuan'),
        'id_kategori'=> $this->request->getVar('kategori'),
        'keterangan'=> $this->request->getVar('keterangan'),
        'file'=>$namaFile
        
    ]);
    $ambilFile->move('file_upload/',$namaFile);
    session()->setFlashdata('pesan', 'Data berhasil di simpan');
    return redirect()->to('/SuratKeluar/datasuratkeluar');

}

public function datasuratkeluar()
{
    $a = new SuratKeluarModel();
    $pencarian = $this->request->getVar('cari');
    if ($pencarian) {
        $hasil = $a->search($pencarian);
    }
    else {
        $hasil = $a;
    }
    $data = [
        'joinsuratkeluarxkategori'=>$a->joinsuratkeluarxkategori(),
        'dataSuratKeluar' => $hasil->paginate(3,'suratkeluar_pages'),
        'pager' => $a->pager 
    ];
    echo view('SuratKeluar/surat_keluar', $data);
}
public function hapus($id)
{
    $a = new SuratKeluarModel();
    $a->delete($id);
    $data['dataSuratKeluar'][]= $a;
    return redirect()->to('../SuratKeluar/datasuratkeluar');

}
}