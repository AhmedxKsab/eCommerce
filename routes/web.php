<?php

use App\Http\Controllers\front\NewsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

// عرض الصفحه بتاعت welcome 
Route::get('/welcome', function () {
    return view('welcome');
});
// normal route ده العادي
Route::get('/lol', function () {
    return 'this is test lol';
});


//route parameters
//requried paratmeter لازم القيمه 
Route::get('/Br_Br/{id}', function () {
    return 'this is required parameter ';
});
Route::get('/Br_Br2/{id}', function ($id) {
    return $id;
});

//optinal parameter مش لازم يكون مع قيمة للمتغير ده
Route::get('/Br_Br3/{id?}', function () {
    return 'welcome to first project in laravel';
});

//route name اسمه ال url عشان اربطها مع ال html link
Route::get('/Br_Br4/{id?}', function () {
    return 'welcome to first project in laravel';
})->name('xD');
// route middleware تاني طريقه
Route::group(['namespace' => 'front'], function () {
    Route::get('NewsController', [NewsController::class, 'showstring']);
    // ->middleware('auth');
    Route::get('NewsController2', [NewsController::class, 'showstring2']);
    Route::get('NewsController3', [NewsController::class, 'showstring3']);
    Route::get('NewsController4', [NewsController::class, 'showstring4']);
});
Route::get('login', function () {
    return 'must be access to login';
})->name('login');
// how to call html page from routes ازي تنادي علي صفحه من ال rotues
// Route::get('index',function(){
//     // 2 اني اعمل متغير ودي في المشاريع والشغل الواقعي
//  $data=[];
//  $data2['Fname']='ahmed';
//  $data3['Mname']='ali';
//  $data4['Lname']='Kmv';
//     return view('welcome',$data2,$data4);
//     // دي طريقه 1 عشان اباصي داتا
//     // ->with(['data1'=>'ahmed','data2'=>'mohamed','data3'=>'kasab']);
// });
Route::get('/welcome', [NewsController::class, 'getindex']);
Route::get('/news', [NewsController::class, 'index'])->name('New');
Route::get('/newsCreate', [NewsController::class, 'create'])->name('New');
// create landing page and view it جبت ملفات ال css ,ال javascript بتاعت ال bootstrap وحطتها في ال public ورحت جبت ملف ال html وحطتيه في ملف ال views وخليت امتداده .blade.php
Route::get('/landingpage', function () {
    return view('landingpage');
});
Route::get('/resources/views/landingpage.blade.php', function () {
    return view('landingpage');
});
// steps from how to verify email address to user
Auth::routes(['verify'=>True]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
Route::get('/', function () {
    return 'home';
});
Route::get('/dashboard',function(){
    return'dashboard';
});