<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangController extends Controller
{
    // method untuk menampilkan semua data keranjang belanja
    public function index()
    {
        // mengambil data dari table keranjang dengan pagination
       // $keranjang = DB::table('keranjangbelanja')->paginate(10);


        //mengambil data dari table keranjang dengan get biasa
        $keranjang = DB::table('keranjangbelanja')->get();

        // mengirim data keranjang ke view index
        return view('keranjang.indexkeranjang', ['keranjang' => $keranjang]);
    }

    // untuk menampilkan form tambah
    public function tambah()
    {
        // memanggil view tambah
        return view('keranjang.tambahkeranjang');
    }

    // untuk menyimpan data baru ke database
    public function store(Request $request)
    {
        // insert data ke table keranjang
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah'     => $request->Jumlah,
            'Harga'      => $request->Harga,
        ]);
        // untuk mengalihkan halaman ke halaman keranjang
        return redirect('/keranjang');
    }

    // untuk menghapus data (di tombol Batal)
    public function hapus($id)
    {
        // menghapus data keranjang berdasarkan id
        DB::table('keranjangbelanja')->where('ID', $id)->delete();

        // alihkan halaman ke halaman keranjang
        return redirect('/keranjang');
    }
}
