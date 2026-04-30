<?php

namespace App\Http\Controllers;
//package

use Illuminate\Http\Request;
//import

class TugasController extends Controller
{
    //pertemuan 1
public function intro(){
    	return view('intro');
    }

    //pertemuan 2
public function news(){
    	return view('news');
    }

public function news1(){
    	return view('news1');
    }

    //pertemuan 3
public function responsive(){
    	return view('responsive');
    }

public function template(){
    	return view('template');
    }

public function tugaspertemuan3(){
    	return view('pertemuan3');
    }

    //pertemuan 4
public function tugaspertemuan4(){
    	return view('tugasweek4');
    }

    //pertemuan 5
public function index(){
    	return view('index');
    }

public function pertemuan5(){
    	return view('pertemuan5');
    }

    //pertemuan 5 dan 6
public function linktree(){
    	return view('linktree');
    }

    //halaman menu
public function menu(){
    	return view('menu');
    }

}

