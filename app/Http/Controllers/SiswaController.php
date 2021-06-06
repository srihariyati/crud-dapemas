<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('key')){
            $siswa = DB::table('siswa')
            ->where( 'nama', 'LIKE','%'.$request->key.'%')
            ->orwhere( 'jenis_kelamin', 'LIKE','%'.$request->key.'%')
            ->orwhere( 'tgl_lahir', 'LIKE','%'.$request->key.'%')
            ->orwhere( 'nisn', 'LIKE','%'.$request->key.'%')  
            ->orwhere( 'jenjang', 'LIKE','%'.$request->key.'%')
            ->orwhere( 'nama_lembaga', 'LIKE','%'.$request->key.'%')  
            ->orwhere( 'status', 'LIKE','%'.$request->key.'%')           
            ->get();
        }else{
            //mengambil data dari table data_siswa
            $siswa = DB::table('siswa')->get();
        }
      

        //mengirim data siswa ke view index
        return view('siswa',['siswa'=> $siswa]);
    }

    public function tambah()
    {
        return view('tambahsiswa');
    }
    
    public function store(Request $request)
    {
        //memasukkan data ke tabel siswa
        DB::table('siswa')->insert([
            'nama'=>$request->nama,
            'jenis_kelamin'=>$request->jeniskelamin,
            'tgl_lahir'=>$request->tgl_lahir,
            'NISN'=>$request->nisn,
            'jenjang'=>$request->jenjang,
            'nama_lembaga'=>$request->nama_lembaga,
            'status'=>$request->status
        ]);

        //alihkan ke halaman siswa
        return redirect ('/siswa');
    }

    public function edit($id)
    {
        //mengambul data siswa berdasarkan id yang dipilih
        $siswa=DB::table('siswa')->where('id',$id)->get();

        //passing data siswa yang didapat ke view editsiswa.blade.php
        return view('editsiswa',['siswa'=>$siswa]);
    }

    public function update(Request $request)
    {
        DB::table('siswa')->where('id',$request->id)->update([
            'nama'=>$request->nama,
            'jenis_kelamin'=>$request->jeniskelamin,
            'tgl_lahir'=>$request->tgl_lahir,
            'NISN'=>$request->nisn,
            'jenjang'=>$request->jenjang,
            'nama_lembaga'=>$request->nama_lembaga,
            'status'=>$request->status
        ]);

        return redirect('/siswa');
    }
    public function konfirmasihapus($id)
    {
        $siswa = DB::table('siswa')->where('id',$id)->get();
        return view('konfirmasihapussiswa',['siswa'=>$siswa]);

    }
    public function hapus($id)
    {
        //menghapus data siswa dengan idterpilih
        DB::table('siswa')->where('id',$id)->delete();

        //mengalihkan kehalaman siswa jika berhasil
        return redirect('/siswa');
    }
}