<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class VeritabaniIslemleri extends Controller
{
    public function ekle() {
      DB::table("bilgiler")->insert([
        "metin"=>"Örnek metin 2"
      ]);
    }
    public function guncelle() {
      DB::table("bilgiler")->where('id',1)->update([
        "metin"=>"Örnek metin güncel"
      ]);
    }
    public function sil() {
      DB::table("bilgiler")->where("id",1)->delete();
    }
    public function yazdir() {
      $veriler=DB::table("bilgiler")->get();
      foreach ($veriler as $key => $bilgi) {
        echo $bilgi->metin."<br>";
      }
      echo "ID:3 olan veriyi getir<br>";
      $veri=DB::table("bilgiler")->where('id',3)->first();
      echo $veri->metin;
    }
  }
