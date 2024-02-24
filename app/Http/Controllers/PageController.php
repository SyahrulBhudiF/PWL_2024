<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'Nim: 22417201167 <br> Nama: Syahrul Bhudi Ferdiansyah';
    }

    public function article($id){
        return "Halaman Artikel dengan Id : $id";
    }
}
