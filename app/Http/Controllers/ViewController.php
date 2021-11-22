<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{

function showPraktikum2()
    {
        return view('prak2web');

    }
    function showETS()
    {
        return view('ets1');
    }
    function showtugasphp1()
    {
        return view('tugasphp');
    }
    function showtugasphp2(Request $request)
    {
        return view('tugasphpdua');
    }

}
