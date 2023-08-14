<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[StudentController::class,'index'])->name('home');
Route::get('/create',[StudentController::class,'create'])->name('student.create');
Route::post('/create',[StudentController::class,'store'])->name('student.store');
Route::get('/edit/{id}',[StudentController::class,'edit'])->name('student.edit');
Route::put('/update/{id}',[StudentController::class,'update'])->name('student.update');
Route::delete('/delete/{id}',[StudentController::class,'destroy'])->name('student.delete');