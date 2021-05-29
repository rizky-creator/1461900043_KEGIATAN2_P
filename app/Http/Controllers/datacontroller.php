<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class datacontroller extends Controller
{
    public function index(){
        $petugas = DB::table('petugas')->get();
        return view('petugas0043',['petugas'=> $petugas]);
    }
    public function cari(Request $request){
        $petugas = $request -> lihat;
        $petugas = DB::table('petugas')->where('petugas_nama' ,'like' ,"%". $petugas. "%")->paginate();
        return view ('petugas0043',['petugas'=> $petugas]);
    }
    public function innerjoin(){
        $petugas = DB::table('petugas')
        ->join('kembali', 'petugas.petugas_id', '=', 'kembali.kembali_id')
        ->select('petugas.petugas_id', 'petugas.petugas_nama', 'petugas.username')
        ->get();
        return view('join0043',['petugas'=>$petugas]);
    }
    public function masuk(request $request){
        $petugas = $request->lihat;
        $petugas = DB::table('petugas')
        ->join('kembali', 'petugas.anggota_id', '=', 'kembali.anggota_id')
        ->select('petugas.petugas_id', 'petugas.petugas_nama', 'petugas.username')->where('petugas_nama','like',"%".$petugas."%")
        ->get();
        return view('join0043',['petugas'=>$petugas]);
    }
}

