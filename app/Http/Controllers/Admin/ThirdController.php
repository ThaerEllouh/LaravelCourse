<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ThirdController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only('showString1', 'showString0');
    }
    
    public function showString0(){
        return "This Is String 0";
    }

    public function showString1(){
        return "This Is String 1";
    }

    public function showString2(){
        return "This Is String 2";
    }

    public function showString3(){
        return "This Is String 3";
    }
}
