<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PendapatanController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        $pendapatan = DB::table('pendapatan')->get();

        // mengirim data pegawai ke view index
        return view('pendapatan.index', ['pendapatan' => $pendapatan]);
    }
    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {

        // memanggil view tambah
        return view('tambah');
    }
    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('pendapatan')->insert([
            'pendapatan_id' => $request->id,
            'pendapatan_idpegawai' => $request->idpegawai,
            'pendapatan_bulan' => $request->bulan,
            'pendapatan_tahun' => $request->tahun,
            'pendapatan_tunjangan' => $request->tunjangan
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pendapatan');
    }
}
