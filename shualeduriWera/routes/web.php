<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {return view('welcome');});
Route::get('/z',[\App\Http\Controllers\ApplicantController::class, 'index']);
Route::get('/{id}', [\App\Http\Controllers\ApplicantController::class, 'show'])->name('applicant.show');
Route::get('/{id}/edit', [\App\Http\Controllers\ApplicantController::class, 'edit'])->name('applicant.edit');
Route::put('/{id}/update', [\App\Http\Controllers\ApplicantController::class, 'update'])->name('applicant.update');
Route::put('/{id}/save', [\App\Http\Controllers\ApplicantController::class, 'save'])->name('applicant.save');
