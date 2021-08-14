<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function showString(){
        return view('front.about', [
        'name'=> 'Thaer'
        ]);
    }

    public function showContact(){
        $data = [];
        $data['id'] = 4;
        $data['name'] = 'teto';
        $data['pass'] = 'thaer1475';
        $data['email'] = 't@hotmail.com';

        $obj = new FirstController();
        $obj-> gender = 'male';
        $obj-> name = 'teto';
        $obj-> univ = 'Al-Azher';
        $obj-> email = 't@hotmail.com';
        $obj-> id = 'teto525';


        return view('front/contact', compact('obj'), $data);
    }
}
