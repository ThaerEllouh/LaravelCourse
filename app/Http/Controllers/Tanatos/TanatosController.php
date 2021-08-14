<?php

namespace App\Http\Controllers\Tanatos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Myinfo{

}

class TanatosController extends Controller
{
    public function showHome(){
        return view('front/tanatos-template/tanatos');
    }

    

    public function showContact(){

        $data = [];
        $data['id'] = 4;
        $data['name'] = 'teto';
        $data['pass'] = 'thaer1475';
        $data['email'] = 't@hotmail.com';

        $obj = new Myinfo();
        $obj-> gender = 'male';
        $obj-> name = 'teto';
        $obj-> univ = 'Al-Azher';
        $obj-> email = 't@hotmail.com';
        $obj-> id = 'teto525';
        return view('front/tanatos-template/tanatos-contact', compact('obj'), $data
    );
    }

    public function showAbout(){

        $data = [];
        $data['id'] = 4;
        $data['name'] = 'teto';
        $data['pass'] = 'thaer1475';
        $data['email'] = 't@hotmail.com';

        $infos = ['thaer', '29years', 'GazaStip'];
        $myinfos = [];

        $obj = new Myinfo();
        $obj-> gender = 'male';
        $obj-> name = 'teto';
        $obj-> univ = 'Al-Azher';
        $obj-> email = 't@hotmail.com';
        $obj-> id = 'teto525';

        return view('front/tanatos-template/aboutme',compact('obj', 'infos', 'myinfos'), $data)->with('age', 30)->with('street', 'Salah-Aldeen');
    }
}


