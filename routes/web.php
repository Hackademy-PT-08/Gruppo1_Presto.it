<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AnnouncementController;

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
//!rotta per la home page
Route::get('/',[HomeController::class,'homepage'])
->name('homepage');

//!rotte per accesso
Route::get('annunci', [AnnouncementController::class, 'index'])
->name('annoucements.index');

Route::get('annunci/aggiungi',[AnnouncementController::class,'create'])
->name('annoucements.create');

Route::post('/annunci/aggiungi',[AnnouncementController::class,'store'])
->name('annoucements.store');