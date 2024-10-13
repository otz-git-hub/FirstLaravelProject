<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function Form1(){
        $name1="Ariyan";
        $name2="Subham";
        return view('form.form1',compact('name1','name2'));
    }
}
