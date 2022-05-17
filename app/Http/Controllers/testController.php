<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function getxinchao ($ten, $namsinh) {
        return ('xin chao ban: ' . $ten . '<br> co nam sinh la: ' . $namsinh);
    }
    public function gettambiet ($ten, $namsinh) {
        return ('tam biet ban: ' . $ten . '<br> co nam sinh la: ' . $namsinh);
    }
    public function getindex ($ten, $namsinh) {
        return view('hello-user' , compact('ten', 'namsinh'));
    }

    public function gethome () {
        return view ('index');
    }
}

 