<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaikuliahController extends Controller
{
    public function index()
    {
    	// mengambil data dari table unggas
        $nilaikuliah = DB::table('nilaikuliah')->paginate(5);

    	// mengirim data unggas ke view index
    	return view('nilaikuliah.index',['nilaikuliah' => $nilaikuliah]); // Teknik komunikasi / passing value antara controller dan view
    }

    // method untuk menampilkan view form tambah unggas
    public function add()
    {
	    // memanggil view tambah
	    return view('nilaikuliah.tambah');
    }

    // method untuk insert data ke table unggas
    public function store(Request $request)
    {
	// insert data ke table unggas
	    DB::table('nilaikuliah')->insert([
		    'idnilaikuliah' => $request->id,
		    'nrpnilaikuliah' => $request->nrp,
		    'nilainilaikuliah' => $request->nilai,
            'sksnilaikuliah' => $request->sks,
	    ]);
	    // alihkan halaman ke halaman unggas
	    return redirect('/nilaikuliah'); // tidak return view, karena jadi tidak fleksibel
    }

    // method untuk edit data unggas
    public function edit($id)
    {
	    // mengambil data unggas berdasarkan id yang dipilih
	    $nilaikuliah = DB::table('nilaikuliah')->where('nilaikuliah',$id)->get();
	    // passing data unggas yang didapat ke view edit.blade.php
	    return view('nilaikuliah.edit',['nilaikuliah' => $nilaikuliah]);

    }

    // update data unggas
    public function update(Request $request)
    {
	    // update data unggas
	    DB::table('nilaikuliah')->where('idnilaikuliah',$request->id)->update([
		    'nrpnilaikuliah' => $request->nrp,
		    'nilainilaikuliah' => $request->nilai,
		    'sksnilaikuliah' => $request->sks,
	    ]);
	    // alihkan halaman ke halaman unggas
	    return redirect('/nilaikuliah');
    }

    // method untuk hapus data unggas
    public function hapus($id)
    {
        // menghapus data unggas berdasarkan id yang dipilih
        DB::table('nilaikuliah')->where('idnilaikuliah',$id)->delete();

        // alihkan halaman ke halaman unggas
        return redirect('/nilaikuliah');
    }

}
