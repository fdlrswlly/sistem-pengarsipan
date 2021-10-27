<?php

namespace App\Controllers;

use App\Models\UserModel;

class KelolaUser extends BaseController
{
    public function index()
    {
        //return view('/KelolaUser/kelola_user');
    }
    public function input()
    {
        return view('/KelolaUser/input_user');
    
    }
    public function simpan()
    {
        $a = new UserModel();
        $a->insert([
            'id'=> $this->request->getVar('id'),
            'email'=> $this->request->getVar('email'),
            'username'=> $this->request->getVar('username'),
            'password'=> $this->request->getVar('password'),
            'role'=> $this->request->getVar('role')
        ]);
        return redirect()->to('KelolaUser/datauser');
    }
    public function datauser()
    {
        $a = new UserModel();
        $pencarian = $this->request->getVar('cari');
        if ($pencarian) {
            $hasil = $a->search($pencarian);
        }
        else {
            $hasil = $a;
        }
        /*$data = [
            'datauser' => $hasil->paginate(4,'kelolauser_pages'),
            'pager' => $a->pager 
        ];*/
        $b = $a->findAll();
        $data = ['datauser' => $b];
        echo view('KelolaUser/kelola_user', $data);
    }

public function edit($id)
{
    $a = new UserModel();
    $b = $a->find($id);
    $data = ['x'=>$b];
    echo view('KelolaUser/edit_user', $data);

}
public function proses_edit($id)
{
    $a = new UserModel();
    //$ambilFile = $this->request->getFile('file');
    //$namaFile = $ambilFile->getName();
    //$id = $this->request->getVar('id');
	$a->update($id, [
        'id'=> ($this->request->getVar('id')),
        'username'=> ($this->request->getVar('username')),
        'password'=> ($this->request->getVar('password')),
        'role'=> ($this->request->getVar('role')),
    ]);
    return redirect()->to('KelolaUser/datauser');
}
}