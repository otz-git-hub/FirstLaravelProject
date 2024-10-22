<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecondController extends Controller
{
    public function First(){
        return "This is first function";
    }
    public function Second(){
        return view(view: 'contact.info.contact-info');
    }
    public function Function1(){
        return "This is function 1";
    }
    public function Function2(){
        return "This is function 2";
    }
    public function Function3(){
        return "This is function 3";
    }
}
