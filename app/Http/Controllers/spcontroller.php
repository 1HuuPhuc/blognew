<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class spcontroller extends Controller
{
     public function getsp () {
        return view ('sanpham');
    }
}
