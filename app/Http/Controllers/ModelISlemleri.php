<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bilgiler;

class ModelISlemleri extends Controller
{
    public function liste() {
      //$bilgi=Bilgiler::get();
    //  $bilgi=Bilgiler::where("id",2)->first();      hepsi aynı
    //    $bilgi=Bilgiler::whereId(2)->first();         anlama
    $bilgi=Bilgiler::find(2);                         //geliyo
      echo $bilgi->metin;
    }
    public function ekle() {
      Bilgiler::create([
        "metin"=>"model örnek",
      ]);
    }
    public function guncelle() {
      Bilgiler::whereId(4)->update([
        "metin"=>"model örnek guncel",
      ]);
    }
    public function sil() {
      Bilgiler::whereId(4)->delete();
    }
}
