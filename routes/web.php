<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/',[StudentController::class,'index'])->name('index');
Route::post('/',[StudentController::class,'create']);
