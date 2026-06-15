<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;




class MyKaryawanController extends Controller
{

    public function index()
    {
    	// mengambil data dari table pegawai
    	$mykaryawan = DB::table('mykaryawan')->get();

    	// mengirim data pegawai ke view index
    	return view('karyawan.index', compact('mykaryawan'));

    }

    // method untuk menampilkan view karyawan
    public function view($karyawan)
	{

        $karyawan = DB::table('mykaryawan')->where('kodepegawai', $karyawan)->first();
		// memanggil view tambah
		return view('karyawan.view', compact('karyawan'));

	}


}
