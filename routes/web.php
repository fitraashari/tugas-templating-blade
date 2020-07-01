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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/master', function(){
    return view('adminlte.master',['judul'=>'Master']);
});
Route::get('/',function(){
    return view('home',['judul'=>'Home']);
});
Route::get('/data-tables', function(){
    return view('data',['judul'=>'Data Tables']);
});
