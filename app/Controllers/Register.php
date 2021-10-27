<?php

namespace App\Controllers;

use App\Models\SuratKeluarModel;

class Register extends BaseController
{
    public function index()
    {
        return view('register');
    }
}