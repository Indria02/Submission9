<?php

namespace App\Http\Controllers;

use App\Models\Peminjam;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        $data = Peminjam::all();
        return view('auth/login', compact('data'));
}
    public function login(){
        $data = Peminjam::all();
        return view('datapeminjam',compact('data'));
    }
}