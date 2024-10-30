<?php

use App\Http\Controllers\FirstController;
use App\Http\Controllers\SecondController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); 
});

Route::get('/index-page',function(){
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
Route::redirect('/about','/contact/info/mca');
Route::get('person-age/{age}',function($age){
    return "Person Age-".$age;
});
Route::get('person-details/{age}/{name}/{id}',function($age,$name,$id){
    return "Person Details Age-".$age."Name-".$name."Id-".$id;
});

Route::get('person-detail/age/{age}/name/{name}/id/{id}/',function($age,$name,$id){
    return "Person Details Age-".$age."Name-".$name."Id-".$id;
});

Route::get('age/{age?}',function($age=null){
    
    if($age){
        return "Person Age-".$age;
    }else{
        return "No person age define";
    }
});

Route::get('person-age/person1/{age}',function($age){
    return "Person Age-".$age;
})->whereNumber('age');
Route::get('person-age/person2/{age}',function($age){
    return "Person Age-".$age;
})->whereAlpha('age');
Route::get('person-age/person3/{age}',function($age){
    return "Person Age-".$age;
})->whereAlphaNumeric('age');
Route::get('category/{category}',function($cat){
    return "Category-".$cat;
})->whereIn('category',['laptop','desktop','mobile']);

// Grouping Route
Route::controller(SecondController::class)->group(function () {
    Route::get('/orders/{id}', 'Function1');
    Route::get('/orders', 'Function2');
    Route::get('/index', 'Function3');
});
//prefix routing
Route::prefix('user')->controller(SecondController::class)->group(function () {
    Route::get('/orders/{id}', 'Function1');
    Route::get('/orders', 'Function2');
    Route::get('/index', 'Function3');
});
Route::prefix('website')->group(function () {
    Route::get('contact-info',function(){
        return view(view: 'contact.info.contact-info');
    });
    Route::view('/form3','welcome')->name('my-form');
});  




Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');
Route::put('/employees/{id}', [EmployeeController::class, 'update'])->name('employees.update');
Route::delete('/employees/{id}', [EmployeeController::class, 'destroy'])->name('employees.destroy');

Route::view('/test','test');
/*
1.Project Run
php artisan serve
2.Creation of Controller
php artisan make:controller FirstController(ControllerName)
use App\Http\Controllers\SecondController;
3. Route List
php artisan route:list

*/

