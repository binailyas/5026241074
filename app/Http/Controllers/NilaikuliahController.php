<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaikuliahController extends Controller
{
    // method untuk menampilkan semua data nilai kuliah
    public function index()
    {
        //mengambil data dari table nilaikuliah dengan get biasa
        $nilaikuliah = DB::table('nilaikuliah')->get();

        // mengirim data nilaikuliah ke view index
        return view('nilaikuliah.index', ['nilaikuliah' => $nilaikuliah]);
    }

    // untuk menampilkan form tambah
    public function tambah()
    {
        // memanggil view tambah
        return view('nilaikuliah.tambah');
    }

    // untuk menyimpan data nilaikuliah baru ke database
    public function store(Request $request)
    {
        // insert data ke table nilaikuliah
        DB::table('nilaikuliah')->insert([
            'NRP'       => $request->NRP,
            'NilaiAngka'=> $request->NilaiAngka,
            'SKS'       => $request->SKS,

        ]);
        // untuk mengalihkan halaman ke halaman nilaikuliah
        return redirect('/nilaikuliah');
    }


}
