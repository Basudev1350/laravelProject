<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticSystemController;
use App\Http\Controllers\AppointmentController;

Route::get('/'                   ,[StaticSystemController::class,'index'])->name('index');
Route::post('/add-appointment'    ,[AppointmentController::class,'store']);