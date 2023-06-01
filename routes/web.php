<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect', [HomeController::class, 'redirect']);
Route::get('/', [HomeController::class, 'index']); 
Route::post('/lgout', [HomeController::class, 'logout']);

Route::get('/prendre_index', [HomeController::class, 'prendre_index']);


Route::get('/show_lieu', [AdminController::class, 'show_lieu']);
Route::get('/show_filiere', [AdminController::class, 'show_filiere']);
Route::get('/show_etudiant', [AdminController::class, 'show_etudiant']);
Route::get('/show_calendrier', [AdminController::class, 'show_calendrier']);
Route::get('/show_rendezvous', [AdminController::class, 'show_rendezvous']);
Route::get('/show_recu/{id}', [AdminController::class, 'show_recu']);

Route::get('/terminer/{id}', [AdminController::class, 'terminer']);
Route::get('/attente/{id}', [AdminController::class, 'attente']);

Route::get('/create_lieu', [AdminController::class, 'create_lieu']);
Route::get('/create_filiere', [AdminController::class, 'create_filiere']);
Route::get('/create_calendrier', [AdminController::class, 'create_calendrier']);
Route::get('/create_etudiant', [AdminController::class, 'create_etudiant']);
Route::get('/create_rendezvous', [AdminController::class, 'create_rendezvous']);

Route::post('/upload_lieu', [AdminController::class, 'upload_lieu']);
Route::post('/upload_filiere', [AdminController::class, 'upload_filiere']);
Route::post('/upload_calendrier', [AdminController::class, 'upload_calendrier']);
Route::post('/upload_etudiant', [AdminController::class, 'upload_etudiant']);
Route::post('/upload_rendezvous', [AdminController::class, 'upload_rendezvous']);

Route::get('/edit_lieu/{id}', [AdminController::class, 'edit_lieu']);
Route::get('/edit_filiere/{id}', [AdminController::class, 'edit_filiere']);
Route::get('/edit_calendrier/{id}', [AdminController::class, 'edit_calendrier']);
Route::get('/edit_etudiant/{id}', [AdminController::class, 'edit_etudiant']);
Route::get('/edit_rendezvous/{id}', [AdminController::class, 'edit_rendezvous']);

Route::post('/update_lieu/{id}', [AdminController::class, 'update_lieu']);
Route::post('/update_filiere/{id}', [AdminController::class, 'update_filiere']);
Route::post('/update_calendrier/{id}', [AdminController::class, 'update_calendrier']);
Route::post('/update_etudiant/{id}', [AdminController::class, 'update_etudiant']);
Route::post('/update_rendezvous/{id}', [AdminController::class, 'update_rendezvous']);

Route::get('/delete_lieu/{id}', [AdminController::class, 'delete_lieu']);
Route::get('/delete_filiere/{id}', [AdminController::class, 'delete_filiere']);
Route::get('/delete_calendrier/{id}', [AdminController::class, 'delete_calendrier']);
Route::get('/delete_etudiant/{id}', [AdminController::class, 'delete_etudiant']);
Route::get('/delete_rendezvous/{id}', [AdminController::class, 'delete_rendezvous']);