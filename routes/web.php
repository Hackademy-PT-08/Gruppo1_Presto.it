<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\Auth\LoginWithSocialsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the Route{{ Serv }}iceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'homepage'])
->name('homepage');



//! Annunci
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

//! Ricerca annunci
Route::get('/ricerca/annunci',[AnnouncementController::class,'filterbar'])
->name('announcements.filterbar');

Route::get('/ricerca/annuncio',[AnnouncementController::class,'SearchAnnouncements'])
->name('announcements.search');


//! User
Route::get('/utente/profilo',[UserController::class,'profile'])
->name('user.profile')
->middleware(['auth','verified']);

Route::get('/utente/annunci',[UserController::class,'announcements'])
->name('user.profile-announcements')
->middleware(['auth','verified']);

Route::post('/utente/cambia_avatar',[UserController::class, 'updateProfileImage'])
->name('user.profile-change_avatar')
->middleware(['auth','verified']);

// Route::delete('/utente/elimina_avatar',[UserController::class, 'deleteProfileImage'])
// ->name('user.profile-elimina_avatar')
// ->middleware(['auth','verified']);

//! Dashboard
Route::get('/dashboard' , [DashboardController::class, 'redirectToAnnouncements'])
->name('dashboard')
->middleware(['IsRevisor']);

Route::get('/dashboard/announcements' , [DashboardController::class, 'announcements'])
->name('dashboard.announcements')
->middleware(['IsRevisor']);

Route::get('/dashboard/announcements/{id}' , [DashboardController::class, 'single'])
->name('dashboard.single')
->middleware(['IsRevisor']);

Route::patch('/dashboard/accept-announcement/{id}' , [DashboardController::class, 'acceptAnnouncement'])
->name('dashboard.accept-announcement')
->middleware(['IsRevisor']);

Route::patch('/dashboard/reject-announcement/{id}' , [DashboardController::class, 'rejectAnnouncement'])
->name('dashboard.reject-announcement')
->middleware(['IsRevisor']);

Route::patch('/dashboard/cancel-last-reject' , [DashboardController::class, 'cancelLastReject'])
->name('dashboard.cancel-last-reject')
->middleware(['IsRevisor']);

Route::get('/dashboard/requests' , [DashboardController::class, 'requests'])
->name('dashboard.requests')
->middleware(['IsAdmin']);

Route::get('/dashboard/users' , [DashboardController::class, 'users'])
->name('dashboard.users')
->middleware(['IsAdmin']);

Route::get('/dashboard/user/{id}' , [DashboardController::class, 'user'])
->name('dashboard.user')
->middleware(['IsAdmin']);

Route::patch('/dashboard/accept-reviewer/{id}' , [DashboardController::class, 'acceptReviewer'])
->name('dashboard.accept-reviewer')
->middleware(['IsAdmin']);

Route::patch('/dashboard/reject-reviewer/{id}' , [DashboardController::class, 'rejectReviewer'])
->name('dashboard.reject-reviewer')
->middleware(['IsAdmin']);

//! route revisore
Route::post('/richiesta/revisore',[RevisorController::class,'store'])
->name('revisor.store')
->middleware(['auth','verified']);

Route::get('/lavora-con-noi',[RevisorController::class,'workWithUs'])
->name('work')
->middleware(['auth','verified']);

Route::get('/rendi/revisore/{user}',[RevisorController::class,'makeRevisor'])
->name('make.revisor');

//! Login con socials
Route::get('/auth/{provider}/redirect',[LoginWithSocialsController::class, 'redirect']);
Route::get('/auth/{provider}/callback',[LoginWithSocialsController::class, 'callback']);

Route::post('/lingua/{lang}', [HomeController::class,'setLanguage'])
->name('set_language_locale');

