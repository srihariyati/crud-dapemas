<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller

{
    public function index()
    {
        $jsiswa     = DB::table('siswa')->get()->count();
        $jmahasiswa = DB::table('mahasiswa')->get()->count();
        return view('index',compact('jsiswa','jmahasiswa'));
        
    }
    
}
