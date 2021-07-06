<?php

use App\Http\Controllers\resumeController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/home',[resumeController::class,'home'])->name('home');
Route::get('/about',[resumeController::class,'about'])->name('about');
Route::get('/experience',[resumeController::class,'experience'])->name('experience');
Route::get('/education',[resumeController::class,'education'])->name('education');
Route::get('/skills',[resumeController::class,'skills'])->name('skills');
Route::get('/interests',[resumeController::class,'interests'])->name('interests');
Route::get('/certifications',[resumeController::class,'certifications'])->name('certifications');
