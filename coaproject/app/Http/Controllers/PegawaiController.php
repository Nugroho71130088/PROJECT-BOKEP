<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PegawaiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$pegawai = DB::table('kegiatancoa')->get();

    	// mengirim data pegawai ke view index
    	return view('kegiatan',['pegawai' => $pegawai]);

    }


    public function tambah()
    {
	// memanggil view tambah
	return view('tambah'); 
	}
	public function tambah_kode()
    {
	// memanggil view tambah
	return view('tambah_kode'); 
    }

    // method untuk insert data ke table pegawai
public function store(Request $request)
    {
	// insert data ke table pegawai
	DB::table('kegiatancoa')->insert([
		'kode_coa' => $request->kode_coa,
		'nama_coa' => $request->nama_coa,
		'keterangan' => $request->keterangan,
	
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/pegawai');

    }

}