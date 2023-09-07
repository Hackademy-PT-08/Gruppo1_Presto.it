<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/',[HomeController::class,'homepage'])
->name('homepage');

// Annunci
Route::get('annunci', [AnnouncementController::class, 'index'])
->name('announcements.index');

Route::get('annuncio/{id}', [AnnouncementController::class, 'show'])
->name('announcements.single');

Route::get('annunci/aggiungi',[AnnouncementController::class,'create'])
->name('announcements.create')
->middleware(['auth','verified']);

Route::get('annunci/modifica/{id}',[AnnouncementController::class,'edit'])
->name('announcements.edit')
->middleware(['auth','verified']);


//! rotte dello User


Route::get('/utenti/profilo',[UserController::class,'profile'])
->name('user.profile')
->middleware(['auth','verified']);

