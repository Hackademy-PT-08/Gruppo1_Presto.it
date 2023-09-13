<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardController;
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

Route::get('/lavora-con-noi',[HomeController::class,'workWithUs'])
->name('work');

// Annunci
Route::get('/annunci', [AnnouncementController::class, 'index'])
->name('announcements.index');

Route::get('/annuncio/aggiungi',[AnnouncementController::class,'create'])
->name('announcements.create')
->middleware(['auth','verified']);

Route::get('/annuncio/modifica/{id}',[AnnouncementController::class,'edit'])
->name('announcements.edit')
->middleware(['auth','verified']);

Route::get('/annuncio/{id}', [AnnouncementController::class, 'show'])
->name('announcements.single');

Route::get('/annunci/categoria/{categoryId}',[AnnouncementController::class,'searchByCategory'])
->name('searchByCategory');

//!rotta ricerca annuncio
Route::get('/ricerca/annunci',[AnnouncementController::class,'filterbar'])
->name('announcements.filterbar');

Route::get('/ricerca/annuncio',[HomeController::class,'SearchAnnouncements'])
->name('announcements.search');







//! rotte dello User


Route::get('/utente/profilo',[UserController::class,'profile'])
->name('user.profile')
->middleware(['auth','verified']);

Route::get('/utente/annunci',[UserController::class,'announcements'])
->name('user.profile-announcements')
->middleware(['auth','verified']);

// Dashboard
Route::get('/dashboard' , [DashboardController::class, 'redirectToAnnouncements'])
->name('dashboard')
->middleware(['auth','verified']);

Route::get('/dashboard/announcements' , [DashboardController::class, 'announcements'])
->name('dashboard.announcements')
->middleware(['auth','verified']);

Route::get('/dashboard/announcements/{id}' , [DashboardController::class, 'single'])
->name('dashboard.single')
->middleware(['auth','verified']);

Route::get('/dashboard/requests' , [DashboardController::class, 'requests'])
->name('dashboard.requests')
->middleware(['auth','verified']);

Route::get('/dashboard/users' , [DashboardController::class, 'users'])
->name('dashboard.users')
->middleware(['auth','verified']);

Route::get('/dashboard/user/{id}' , [DashboardController::class, 'user'])
->name('dashboard.user')
->middleware(['auth','verified']);

Route::post('/dashboard/accept-reviewer/{id}' , [DashboardController::class, 'acceptReviewer'])
->name('dashboard.accept-reviewer')
->middleware(['auth','verified']);

Route::post('/dashboard/reject-reviewer/{id}' , [DashboardController::class, 'rejectReviewer'])
->name('dashboard.reject-reviewer')
->middleware(['auth','verified']);

Route::post('/dashboard/accept-announcement/{id}' , [DashboardController::class, 'acceptAnnouncement'])
->name('dashboard.accept-announcement')
->middleware(['auth','verified']);

Route::post('/dashboard/reject-announcement/{id}' , [DashboardController::class, 'rejectAnnouncement'])
->name('dashboard.reject-announcement')
->middleware(['auth','verified']);

Route::post('/dashboard/cancel-last-reject' , [DashboardController::class, 'cancelLastReject'])
->name('dashboard.cancel-last-reject')
->middleware(['auth','verified']);
