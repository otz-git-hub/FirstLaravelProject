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
}
