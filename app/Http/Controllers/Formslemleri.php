<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Formslemleri extends Controller
{
     public function gorunum()
    {
      return view("form");
    }
    public function sonuc(Request $request)
    {
      return $request->metin;
    }
}
