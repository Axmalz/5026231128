<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrukDBController extends Controller
{
    public function index()
    {
    	// mengambil data dari table truk

    	// untuk pagination, kita bisa pake paginate() yang akan membagi data menjadi beberapa halaman
    	// paginate(10) artinya kita akan menampilkan 10 data per halaman
    	// jadi, jika ada 25 data, akan ada 3 halaman (10+10+5)

        //$truk = DB::table('truk')->get(); // ini pake get() untuk mengambil semua data
        $truk = DB::table('truk')->paginate(10);

    	// mengirim data truk ke view index
    	return view('tugaspert14/index',['truk' => $truk]);
    }

// method untuk menampilkan view form tambah truk
    public function tambah(){
        // memanggil view tambah
        return view('tugaspert14/tambah');
    }

    // method untuk insert data ke table truk
public function store(Request $request)
{
	// insert data ke table truk
	DB::table('truk')->insert([
		'merktruk' => $request->merktruk,
		'hargatruk' => $request->hargatruk,
		'tersedia' => $request->tersedia,
		'berat' => $request->berat
	]);
	// alihkan halaman ke halaman truk
	return redirect('/truk');

}

// method untuk edit data truk
public function edit($id)
{
	// mengambil data truk berdasarkan id yang dipilih
	$truk = DB::table('truk')->where('id',$id)->get();
	// passing data truk yang didapat ke view edit.blade.php
	return view('tugaspert14/edit',['truk' => $truk]);

}

// update data truk
public function update(Request $request)
{
	// update data truk
	DB::table('truk')->where('id',$request->id)->update([
		'merktruk' => $request->merktruk,
		'hargatruk' => $request->hargatruk,
		'tersedia' => $request->tersedia,
		'berat' => $request->berat
	]);
	// alihkan halaman ke halaman truk
	return redirect('/truk');
}

// method untuk hapus data truk
public function hapus($id)
{
	// menghapus data truk berdasarkan id yang dipilih
	DB::table('truk')->where('id',$id)->delete();

	// alihkan halaman ke halaman truk
	return redirect('/truk');
}

public function cari(Request $request)
{
    // menangkap data pencarian
    $cari = $request->cari;

        // mengambil data dari table truk sesuai pencarian data
    $truk = DB::table('truk')
    ->where('merktruk','like',"%".$cari."%")
    ->paginate();

        // mengirim data truk ke view index
    return view('tugaspert14/index',['truk' => $truk]);

}
}

