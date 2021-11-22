<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PegawaiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$pendapatan = DB::table('pendapatan')->get();

    	// mengirim data pegawai ke view index
    	return view('indexpendapatan.index',['pendapatan' => $pendapatan]);

    }
}
