<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class App extends Controller
{
    public function index() {
      return "anasayfa";
    }
    public function hakkimizda() {
      return "hakkimizda";
    }
  public function uye($uye) {
      return "Hoşgeldin ".$uye;
    }
    //view üzerinden metin alma ve ve viewa değer gönderme
    public function isim_gonder($isim) {
      return view('ornek',['ad'=>$isim]);
    }
}
