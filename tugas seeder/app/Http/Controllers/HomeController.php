<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function index(){
     $namalengkap = 'Faza';
    $alamat = 'Badak Putih';
    $data = array(
        'nama' => 'Faza',
        'alamat' => 'Cianjur'
    );
    return view('home', $data);
    }
}
