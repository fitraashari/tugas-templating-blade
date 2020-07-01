<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplatingController extends Controller
{
    //
    function home (){
        return view('home',['judul'=>'Home']);
    }
    function data (){
        return view('data',['judul'=>'Data Tables']);
    }
}
