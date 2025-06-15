<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageCounterController extends Controller
{
    public function index()
    {
        // Ambil record ID=1
        $row = DB::table('pagecounter')->where('ID', 1)->first();

        // Jika belum ada, insert dengan Jumlah = 0
        if (! $row) {
            DB::table('pagecounter')->insert([
                'ID'     => 1,
                'Jumlah' => 0,
            ]);
            $current = 0;
        } else {
            $current = $row->Jumlah;
        }

        // Increment
        $newCount = $current + 1;
        DB::table('pagecounter')
            ->where('ID', 1)
            ->update(['Jumlah' => $newCount]);

        // Kirim ke view
        return view('pagecounter.index', [
            'nrp'   => '5026231128',
            'name'  => 'FADHIIL AKMAL HAMIZAN',
            'count' => $newCount,
        ]);
    }
}
