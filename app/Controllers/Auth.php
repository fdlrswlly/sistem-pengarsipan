<?php

namespace App\Controllers;

use App\Models\UserModel;


class Auth extends BaseController
{
    public function __construct()
    {
        //membuat user model untuk konek ke database 
        $this->userModel = new UserModel();
        
        //meload validation
        $this->validation = \Config\Services::validation();
        
        //meload session
        $this->session = \Config\Services::session();
        
    }
    
    public function login()
    {
        if (session()->get('username')) {
        return redirect()->to('home/dashboard');

        }
        return view('login');
    }
    
    public function register()
    {
        //menampilkan halaman register
        return view('register');
    }
    
    /*public function valid_register()
    {
        //tangkap data dari form 
        $data = $this->request->getPost();
        
        //jalankan validasi
        $this->validation->run($data, 'register');
        
        //cek errornya
        $errors = $this->validation->getErrors();
        
        //jika ada error kembalikan ke halaman register
        if($errors){
            session()->setFlashdata('error', $errors);
            return redirect()->to('/auth/register');
        }
        
        //jika tdk ada error 
        
        //buat salt
       // $salt = uniqid('', true);
        //hash password digabung dengan salt
        //$password = ($data['password']);
        //get level
        //$role = $this->request->getPost();
        //masukan data ke database
        $this->userModel->save([
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => $data['password'],
            'role' => $data['role']
            ]);
        
        //arahkan ke halaman login
        //session()->setFlashdata('login', 'Anda berhasil mendaftar, silahkan login');
        return redirect()->to('/KelolaUser/datauser');
    }*/
   
    public function valid_login()
    {
        //ambil data dari form
        $data = $this->request->getPost();
        //$role = $this->request->getPost();
        //ambil data user di database yang usernamenya sama 
        $user = $this->userModel->where('username', $data['username'])->first();
        //ambil role
        //$role = $this->userModel->where('role', $data['role'])->first();
        //cek apakah username ditemukan
        if($user){
            //cek password
            //jika salah arahkan lagi ke halaman login
            if($user['password'] != ($data['password'])){
                session()->setFlashdata('password', 'Password salah');
                return redirect()->to('/auth/login');
            }
            else{
                //jika benar, arahkan user masuk ke aplikasi 
                $sessLogin = [
                    'isLogin' => true,
                    'username' => $user['username'],
                    'role' => $user['role']
                    ];
                $this->session->set($sessLogin);
                return redirect()->to('home/dashboard');
                
               
            }
        }
        else{
            //jika username tidak ditemukan, balikkan ke halaman login
            session()->setFlashdata('username', 'Username tidak ditemukan');
            return redirect()->to('/auth/login');
        }
    }
    
    public function logout()
    {
        //hancurkan session 
        //balikan ke halaman login
        $this->session->destroy();
        return redirect()->to('/auth/login');
    }
    
}