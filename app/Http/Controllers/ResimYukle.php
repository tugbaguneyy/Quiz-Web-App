<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResimYukle extends Controller
{
  public function resimYukleme(Request $request) {
    //echo $request->resim->getClientOriginalName(); //Dosya ismini alma
  //  echo "<br>";
  //  echo $request->resim->getClientOriginalExtension(); //Dosya uzantısını alma
  $resimadi="resim.".$request->resim->getClientOriginalExtension();
  $yukle=$request->resim->move(public_path('image'),$resimadi);
  }
}
