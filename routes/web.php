<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/in', function () {
    return view('introduction');
});

//
//    return view('foshans');
//});
//>>>>>>> 466a97f873bd2a12349496b3d8a1c19af5a08264
/*Route::get('/brand', function () {
    return view('brand');
});

Route::get('/change', function () {
    return view('change');
});
Route::get('/agency', function () {
    return view('agency');
});
Route::get('/company', function () {
    return view('company');
});
Route::get('/power', function () {
    return view('power');
});
Route::get('/cancel', function () {
    return view('cancel');
});
