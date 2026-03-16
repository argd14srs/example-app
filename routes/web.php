<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;   



Route::resource('tests',
TestController::class
);

?>