<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MypegawaiController extends Controller
{
    // method untuk menampilkan semua data keranjang belanja
    public function index()
    {
        // mengambil data dari table keranjang dengan pagination
       // $keranjang = DB::table('keranjangbelanja')->paginate(10);


        //mengambil data dari table keranjang dengan get biasa
        $mypegawai = DB::table('mypegawai')->get();

        // mengirim data keranjang ke view index
        return view('mypegawai.indexmypegawai', ['mypegawai' => $mypegawai]);
    }

    // untuk menampilkan form tambah
    public function tambah()
    {
        // memanggil view tambah
        return view('mypegawai.tambahmypegawai');
    }

    // untuk menyimpan data baru ke database
    public function store(Request $request)
    {
        // insert data ke table keranjang
        DB::table('mypegawai')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap'     => $request->namalengkap,
            'divisi'      => $request->divisi,
            'departemen'      => $request->departemen,

        ]);
        return redirect('/mypegawai');
    }

    // untuk menghapus data (di tombol Batal)
    public function view($kodepegawai)
    {
        $mypegawai = DB::table('mypegawai')->where('kodepegawai', $kodepegawai)->first();

        if (!$mypegawai) {
            abort(404);
        }
        return view('mypegawai.viewmypegawai', compact('mypegawai'));
    }
}
