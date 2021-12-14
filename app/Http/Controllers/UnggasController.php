<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UnggasController extends Controller
{
    public function index()
    {
    	// mengambil data dari table unggas
        $unggas = DB::table('unggas')->paginate(5);

    	// mengirim data unggas ke view index
    	return view('unggas.index',['unggas' => $unggas]); // Teknik komunikasi / passing value antara controller dan view
    }

    // method untuk menampilkan view form tambah unggas
    public function add()
    {
	    // memanggil view tambah
	    return view('unggas.tambah');
    }

    // method untuk insert data ke table unggas
    public function store(Request $request)
    {
	// insert data ke table unggas
	    DB::table('unggas')->insert([
		    'namaunggas' => $request->nama,
		    'jumlahunggas' => $request->jumlah,
		    'tersedia' => $request->tersedia,
	    ]);
	    // alihkan halaman ke halaman unggas
	    return redirect('/unggas'); // tidak return view, karena jadi tidak fleksibel
    }

    // method untuk edit data unggas
    public function edit($id)
    {
	    // mengambil data unggas berdasarkan id yang dipilih
	    $unggas = DB::table('unggas')->where('kodeunggas',$id)->get();
	    // passing data unggas yang didapat ke view edit.blade.php
	    return view('unggas.edit',['unggas' => $unggas]);

    }

    // method untuk melihat detail data unggas
    public function detail($id)
    {
	    // mengambil data unggas berdasarkan id yang dipilih
	    $unggas = DB::table('unggas')->where('kodeunggas',$id)->get();
	    // passing data unggas yang didapat ke view edit.blade.php
	    return view('unggas.detail',['unggas' => $unggas]);

    }

    // update data unggas
    public function update(Request $request)
    {
	    // update data unggas
	    DB::table('unggas')->where('kodeunggas',$request->id)->update([
		    'namaunggas' => $request->nama,
		    'jumlahunggas' => $request->jumlah,
		    'tersedia' => $request->tersedia,
	    ]);
	    // alihkan halaman ke halaman unggas
	    return redirect('/unggas');
    }

    // method untuk hapus data unggas
    public function hapus($id)
    {
        // menghapus data unggas berdasarkan id yang dipilih
        DB::table('unggas')->where('kodeunggas',$id)->delete();

        // alihkan halaman ke halaman unggas
        return redirect('/unggas');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    	// mengambil data dari table unggas sesuai pencarian data
		$unggas = DB::table('unggas')
		->where('namaunggas','like',"%".$cari."%")
		->paginate();

    	// mengirim data unggas ke view index
		return view('unggas.index',['unggas' => $unggas]);

	}
}
