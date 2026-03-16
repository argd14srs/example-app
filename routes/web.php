<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;   

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function(){
    return view('about');
});

Route::get('/ideas',function(){
    $ideas = DB::table('ideas')->get();
    return $ideas;
});


Route::resource('tests',
TestController::class
);

?>