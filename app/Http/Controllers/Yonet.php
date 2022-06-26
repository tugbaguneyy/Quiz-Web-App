<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Yonet extends Controller
{
    public function site()
    {
      $data["yazi1"]="PHP Turkey";
      $data["yazi2"]="Welcome";
      return view('web',$data);
    }
}
