<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Haruncpi\LaravelIdGenerator\IdGenerator;

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
Route::get('/home_ar', [HomeController::class, 'index_ar']); 
Route::post('/lgout', [HomeController::class, 'logout']);

Route::get('/prendre_rdv', [HomeController::class, 'prendre_rdv']);
Route::get('/prendre_rdv_ar', [HomeController::class, 'prendre_rdv_ar']);

Route::post('/create_rdv', [HomeController::class, 'create_rdv']);
Route::post('/create_rdv_ar', [HomeController::class, 'create_rdv_ar']);

Route::get('/get-lieus/{id_fil}', [HomeController::class, 'getLieus']);
Route::get('/get-dates/{id_lieu}', [HomeController::class, 'getDates']);
Route::get('/get-times/{id_date}', [HomeController::class, 'getTimes']);

Route::get('/confirmation/{id}', [HomeController::class, 'confirmation'])->name('user.prendre.confirmation');


Route::get('/show_lieu', [AdminController::class, 'show_lieu']);
Route::get('/show_filiere', [AdminController::class, 'show_filiere']);
Route::get('/show_date', [AdminController::class, 'show_date']);
Route::get('/show_time', [AdminController::class, 'show_time']);
Route::get('/show_plan', [AdminController::class, 'show_plan']);
Route::get('/show_rendezvous', [AdminController::class, 'show_rendezvous']);
Route::get('/show_recu/{id}', [AdminController::class, 'show_recu']);

Route::get('/terminer/{id}', [AdminController::class, 'terminer']);
Route::get('/attente/{id}', [AdminController::class, 'attente']);

Route::get('/create_lieu', [AdminController::class, 'create_lieu']);
Route::get('/create_filiere', [AdminController::class, 'create_filiere']);
Route::get('/create_date', [AdminController::class, 'create_date']);
Route::get('/create_time', [AdminController::class, 'create_time']);
Route::get('/create_plan', [AdminController::class, 'create_plan']);
Route::get('/create_rendezvous', [AdminController::class, 'create_rendezvous']);

Route::post('/upload_lieu', [AdminController::class, 'upload_lieu']);
Route::post('/upload_filiere', [AdminController::class, 'upload_filiere']);
Route::post('/upload_date', [AdminController::class, 'upload_date']);
Route::post('/upload_time', [AdminController::class, 'upload_time']);
Route::post('/upload_plan', [AdminController::class, 'upload_plan']);
Route::post('/upload_rendezvous', [AdminController::class, 'upload_rendezvous']);

Route::get('/edit_lieu/{id}', [AdminController::class, 'edit_lieu']);
Route::get('/edit_filiere/{id}', [AdminController::class, 'edit_filiere']);
Route::get('/edit_date/{id}', [AdminController::class, 'edit_date']);
Route::get('/edit_time/{id}', [AdminController::class, 'edit_time']);
Route::get('/edit_plan/{id}', [AdminController::class, 'edit_plan']);
Route::get('/edit_rendezvous/{id}', [AdminController::class, 'edit_rendezvous']);

Route::post('/update_lieu/{id}', [AdminController::class, 'update_lieu']);
Route::post('/update_filiere/{id}', [AdminController::class, 'update_filiere']);
Route::post('/update_date/{id}', [AdminController::class, 'update_date']);
Route::post('/update_time/{id}', [AdminController::class, 'update_time']);
Route::post('/update_plan/{id}', [AdminController::class, 'update_plan']);
Route::post('/update_rendezvous/{id}', [AdminController::class, 'update_rendezvous']);

Route::get('/delete_lieu/{id}', [AdminController::class, 'delete_lieu']);
Route::get('/delete_filiere/{id}', [AdminController::class, 'delete_filiere']);
Route::get('/delete_date/{id}', [AdminController::class, 'delete_date']);
Route::get('/delete_time/{id}', [AdminController::class, 'delete_time']);
Route::get('/delete_plan/{id}', [AdminController::class, 'delete_plan']);
Route::get('/delete_rendezvous/{id}', [AdminController::class, 'delete_rendezvous']);

Route::get('/search', [HomeController::class, 'search']);
Route::get('/search_ar', [HomeController::class, 'search_ar']);