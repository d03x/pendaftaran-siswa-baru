<?php

namespace App\Http\Controllers;

use App\Services\Siswa\FormulirService;

class BiodataSiswaController extends Controller
{
    public function index()
    {
        return view('dashboard.siswa.biodata');
    }

    public function simpan(FormulirService $formulirService){

    }
}
