<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table nilai

    	// untuk pagination, kita bisa pake paginate() yang akan membagi data menjadi beberapa halaman
    	// paginate(10) artinya kita akan menampilkan 10 data per halaman
    	// jadi, jika ada 25 data, akan ada 3 halaman (10+10+5)

        //$nilai = DB::table('nilai')->get(); // ini pake get() untuk mengambil semua data
        $nilai = DB::table('nilai')->get();

    	// mengirim data nilai ke view index
    	return view('EAS/index',['nilai' => $nilai]);
    }

// method untuk menampilkan view form tambah nilai
    public function tambah(){
        // memanggil view tambah
        return view('EAS/tambah');
    }

    // method untuk insert data ke table nilai
public function store(Request $request)
{
	// insert data ke table nilai
	DB::table('nilai')->insert([
		'normorinduksiswa' => $request->normorinduksiswa,
		'nilaiangka' => $request->nilaiangka,
		'sks' => $request->sks
	]);
	// alihkan halaman ke halaman nilai
	return redirect('/eas');
}


// update data nilai
public function update(Request $request)
{
	// update data nilai
	DB::table('nilai')->where('id',$request->id)->update([
		'normorinduksiswa' => $request->normorinduksiswa,
		'nilaiangka' => $request->nilaiangka,
		'sks' => $request->sks
	]);
	// alihkan halaman ke halaman nilai
	return redirect('/eas');
}
}

