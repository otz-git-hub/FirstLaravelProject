<?php

use App\Http\Controllers\FirstController;
use App\Http\Controllers\SecondController;
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
//inside contact
Route::get('contact',function(){
    return view(view: 'contact.contactus');
});
Route::get('contact-me',function(){
    return view(view: 'contact.contactme');
});
//Inside contact/info
Route::get('contact-info',function(){
    return view(view: 'contact.info.contact-info');
});
Route::view('/contact/info/please-contact-me','contact.info.contact-info2')->name('contact');
Route::view('/contact/info/mca','contact.info.contact-info2');

Route::view('/form3','welcome');

//Route::get('/website/form1',[FirstController::class,'Form1']);
// Route::redirect('/form3','/',200);
// Route::get('about/second',function(){
//     return "This is 2nd function";
// });
Route::get('about',[SecondController::class,'First']);
Route::get('about/second',[SecondController::class,'Second']);


/*
1.Project Run
php artisan serve
2.Creation of Controller
php artisan make:controller FirstController(ControllerName)
use App\Http\Controllers\SecondController;

*/