<?php

use App\Http\Controllers\FirstController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); 
});


Route::get('/index',function(){
    return view('index');
});

Route::get('form1',function(){
    return view(view: 'form.form1');
});
Route::get('form2',function(){
    return view(view: 'form.form2');
});

Route::view('/form3','welcome');

//Route::get('/website/form1',[FirstController::class,'Form1']);
// Route::redirect('/form3','/',200);
