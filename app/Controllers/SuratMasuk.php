<?php 

namespace App\Controllers;

use App\Models\SuratMasukModel;

class SuratMasuk extends BaseController
{
public function index()
{
    
}
public function input()
{
    session();
    $a = new SuratMasukModel();
    $data = [
        'dropdown'=>$a->dropdownkategori(),
        'pesan_validasi' => \Config\Services::validation()
    ];
    echo view('SuratMasuk/input_surat_masuk', $data);
}

public function simpan()
{

    $atur=$this->validate([
        'no_surat' => [
        'label' => 'No Surat',
        'rules' => 'required',
        'errors' => [
                'required' => '{field} tidak boleh kosong'
        ]
        ],
        'tgl_surat' => [
            'label' => 'Tanggal Surat',
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
        'pengirim' => [
            'label' => 'Pengirim',
            'rules' => 'required',
            'errors' => [
                'required' => '{field} tidak boleh kosong'
        ]
        ],
        'status' => [
            'label' => 'Status',
            'rules' => 'required',
            'errors' => [
                'required' => '{field} tidak boleh kosong'
    
        ]
        ],
        'kategori' => [
            'label' => 'kategori',
            'rules' => 'required',
            'errors' => [
                'required' => '{field} tidak boleh kosong'
    
        ]
        ]
]); 
    if (!$atur){
        return redirect()->to('/SuratMasuk/input')->withInput();
    }

    $a = new SuratMasukModel();
    $ambilFile = $this->request->getFile('file');
    $namaFile = $ambilFile->getName();
    $a->insert([
        'id_surat'=> $this->request->getVar('id_surat'),
        'id_kategori'=> $this->request->getVar('kategori'),
        'no_surat'=> $this->request->getVar('no_surat'),
        'tgl_surat'=> $this->request->getVar('tgl_surat'),
        'perihal'=> $this->request->getVar('perihal'),
        'pengirim'=> $this->request->getVar('pengirim'),
        'status'=> $this->request->getVar('status'),
        'id_kategori'=> $this->request->getVar('kategori'),
        'keterangan'=> $this->request->getVar('keterangan'),
        'file' =>$namaFile
    ]); 
    $ambilFile->move('file_upload/',$namaFile);
    session()->setFlashdata('pesan', 'Data berhasil di simpan');
    return redirect()->to('SuratMasuk/datasurat');
} 


public function datasurat()
{
    $a = new SuratMasukModel();
    $pencarian = $this->request->getVar('cari');
    if ($pencarian) {
        $hasil = $a->search($pencarian);
    }
    else {
        $hasil = $a;
    }
    $data = [
      //  'dataSuratMasuk' => $hasil->paginate(3,'suratmasuk_pages'),
        'joinsuratmasukxkategori'=>$a->joinsuratmasukxkategori(),
        //'pager' => $a->pager 
    ];
    $b = $a->findAll();
    //$data = ['dataSuratMasuk' => $b];
    echo view('SuratMasuk/surat_masuk', $data);
}
public function edit($id)
{
    $a = new SuratMasukModel();
    $b = $a->find($id);
    
    $data = [
        'dropdown'=>$a->dropdownkategori(),
        'x'=>$b
    ];
    echo view('SuratMasuk/edit_surat_masuk', $data);

}
public function proses_edit()
{
    $a = new SuratMasukModel();
    $ambilFile = $this->request->getFile('file');
    $namaFile = $ambilFile->getName();
    $id = $this->request->getVar('id');
	$a->update($id, [
        'no_surat'=> $this->request->getVar('no_surat'),
        'tgl_surat'=> $this->request->getVar('tgl_surat'),
        'perihal'=> $this->request->getVar('perihal'),
        'pengirim'=> $this->request->getVar('pengirim'),
        'status'=> $this->request->getVar('status'),
        'id_kategori'=> $this->request->getVar('kategori'),
        'keterangan'=> $this->request->getVar('keterangan'),
        'file'=>$namaFile
        
    ]);
    $ambilFile->move('file_upload/',$namaFile);
    session()->setFlashdata('pesan', 'Data berhasil di simpan');
    return redirect()->to('/SuratMasuk/datasurat');
}
public function hapus($id)
{
    $a = new SuratMasukModel();
    $a->delete($id);
    $data['dataSuratMasuk'][]= $a;
    return redirect()->to('../SuratMasuk/datasurat');

}
}