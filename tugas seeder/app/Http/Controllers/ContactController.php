<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
     $namalengkap = 'Faza';
    $alamat = 'Badak Putih';
    $data = array(
        'nama' => 'Faza',
        'alamat' => 'Cianjur'
    );
    return view('Contact', $data);
    }
}
