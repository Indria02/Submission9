<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use App\Models\Peminjam;
use Illuminate\Http\Request;

class PeminjamController extends Controller
{
    public function index(){

        $data = mahasiswa::all();
        return view('datapeminjam',compact('data'));
    }

    public function tambahpeminjam(){
        return view('tambahdata');
    }

    public function insertdata(Request $request){
        //dd($request->all());
        mahasiswa::create($request->all());
        return redirect()->route('mahasiswa')->with('success','Data Berhasil Ditambahkan');
    }
    
    public function editdata($id){
        $data = mahasiswa::find($id);
        return view('editdata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = mahasiswa::find($id);
        $data->update($request->all());
        return redirect()->route('mahasiswa')->with('success','Data Berhasil Diupdate');
    }

    public function deletedata($id){
        $data = mahasiswa::find($id);
        $data->delete();
        return redirect()->route('mahasiswa')->with('success','Data Berhasil Dihapus');
    }
}
