<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    // method untuk menampilkan daftar buku
    public function index()
    {

        // mengambil data dari table buku dengan pagination
        $buku = DB::table('buku')->paginate(10);

    	// mengirim data buku ke view index
    	return view('buku.indexbuku',['buku' => $buku]);

    }

    // method untuk menampilkan view form tambah buku
	public function tambah()
	{

		// memanggil view tambah
		return view('buku.tambahbuku');

	}

	// method untuk insert/menyimpan data buku baru ke table buku
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('buku')->insert([
			'merkbuku' => $request->merkbuku,
			'stockbuku' => $request->stockbuku,
			'tersedia' => $request->tersedia,
		]);
		// untuk mengalihkan halaman ke halaman buku
		return redirect('/buku');

	}

	// method untuk menampilkan form edit buku berdasarkan id
	public function edit($id)
	{
		// mengambil data buku berdasarkan id yang dipilih
		$buku  = DB::table('buku')->where('kodebuku',$id)->get();
		// passing data buku yang didapat ke view buku.edit.blade.php
		return view('buku.editbuku',['buku' => $buku]);

	}

	// method untuk menyimpan perubahan data buku ke database
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('buku')->where('kodebuku',$request->id)->update([
			'merkbuku' => $request->merkbuku,
			'stockbuku' => $request->stockbuku,
			'tersedia' => $request->tersedia,
		]);
		// alihkan halaman ke halaman buku
		return redirect('/buku');
	}

	// method untuk hapus data buku berdasarkan id
	public function hapus($id)
	{
		// menghapus data buku berdasarkan id yang dipilih
		DB::table('buku')->where('kodebuku',$id)->delete();

		// alihkan halaman ke halaman buku
		return redirect('/buku');
	}

    // Method untuk mencari buku berdasarkan nama/merk
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table buku sesuai pencarian data
		$pegawai = DB::table('buku')
		->where('merkbuku','like',"%".$cari."%")
		->paginate();

    		// mengirim data buku ke view index
		return view('buku.indexbuku',['buku' => $pegawai]);

	}
}



