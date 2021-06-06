<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index(Request $request)
    {
     //Data Mahasiswa
        //mengambil data dari table data_siswa
        
        //mencari data sesuai kata kunci
        if($request->has('key')){
            $mahasiswa = DB::table('mahasiswa')
            ->where( 'nama', 'LIKE','%'.$request->key.'%')
            ->orwhere( 'jenis_kelamin', 'LIKE','%'.$request->key.'%')
            ->orwhere( 'tgl_lahir', 'LIKE','%'.$request->key.'%')
            ->orwhere( 'nim', 'LIKE','%'.$request->key.'%')  
            ->orwhere( 'jenjang', 'LIKE','%'.$request->key.'%')
            ->orwhere( 'nama_lembaga', 'LIKE','%'.$request->key.'%')  
            ->orwhere( 'prodi', 'LIKE','%'.$request->key.'%')
            ->orwhere( 'status', 'LIKE','%'.$request->key.'%')           
            ->get();
        }else{
            $mahasiswa = DB::table('mahasiswa')->get();
        }
       
        //mengirim data siswa ke view index
        return view('mahasiswa',['mahasiswa'=> $mahasiswa]);
    }

    public function tambah()
    {
        return view('tambahmahasiswa');
    }

    public function store(Request $request)
    {
         //memasukkan data ke tabel mahasiswa
        DB::table('mahasiswa')->insert([
                'nama'=>$request->nama,
                'jenis_kelamin'=>$request->jeniskelamin,
                'tgl_lahir'=>$request->tgl_lahir,
                'nim'=>$request->nim_npm,
                'jenjang'=>$request->jenjang,
                'nama_lembaga'=>$request->nama_lembaga,
                'prodi'=>$request->prodi,
                'status'=>$request->status
        ]);

        //mengalihkan ke halaman mahasiswa jika data berhasil terdaftar
        return redirect ('/mahasiswa');

    }

    public function edit($id)
    {
        //mengambul data siswa berdasarkan id yang dipilih
        $mahasiswa=DB::table('mahasiswa')->where('id',$id)->get();

        //passing data siswa yang didapat ke view editsiswa.blade.php
        return view('editmahasiswa',['mahasiswa'=>$mahasiswa]);
    }

    public function update(Request $request)
    {
        //update data mahasiswa
        DB::table('mahasiswa')->where('id',$request->id)->update([
            'id'=>"",
            'nama'=>$request->nama,
            'jenis_kelamin'=>$request->jeniskelamin,
            'tgl_lahir'=>$request->tgl_lahir,
            'nim'=>$request->nim_npm,
            'jenjang'=>$request->jenjang,
            'nama_lembaga'=>$request->nama_lembaga,
            'prodi'=>$request->prodi,
            'status'=>$request->status 
        ]);

        //alihkan ke halaman mahasiswa
        return redirect('/mahasiswa');
    }

    public function konfirmasihapus($id)
    {
        $mahasiswa= DB::table('mahasiswa')->where('id',$id)->get();
        return view('konfirmasihapusmahasiswa',['mahasiswa'=>$mahasiswa]);
    }
    public function hapus($id)
    {
        DB::table('mahasiswa')->where('id',$id)->delete();
        return redirect('/mahasiswa');
    }

}
