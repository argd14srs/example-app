<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function(){
    return view('about');
});

Route::get('/ideas',function(){
    $ideas = DB::table('ideas')->get();
    // $ideas = Illuminate\Support\Facades\DB::table('ideas')->get();
    // dd($ideas);
    return $ideas;
});
