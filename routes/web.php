<?php

use App\Http\Controllers\CandidatController;
use App\Http\Controllers\NiveauController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FormationController;

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

Route::get('/', [HomeController::class, 'home'])->name('accueil');
// Route::get('/inscription', [HomeController::class, 'register'])->name('inscription');
Route::post('/inscription', [HomeController::class, 'inscrption'])->name('inscription');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



    ///////////////////////////////// LISTES DES FORMATIONS //////////////////////////////////////////////
    Route::prefix('formations')->name('formation.')->controller(FormationController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('/delete/{id}', 'destroy')->name('delete');
    });


      ///////////////////////////////// LISTES DES NIVEAUX //////////////////////////////////////////////
      Route::prefix('niveaux')->name('niveau.')->controller(NiveauController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('/delete/{id}', 'destroy')->name('delete');
    });


      ///////////////////////////////// LISTES DES NIVEAUX //////////////////////////////////////////////
      Route::prefix('candidats')->name('candidat.')->controller(CandidatController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/valdate/{id}', 'validation')->name('validate');
    });


    // Route::get('/formations_list', [AdminController::class, 'formations_list'])->name('formations_list');
    // Route::post('/add-formation', [AdminController::class, 'add_formation'])->name('add_formation');
    // Route::get('/edit_formation/{id}', [AdminController::class, 'edit_formation'])->name('edit_formation');
    // Route::post('/update_formation/{id}', [AdminController::class, 'update_formation'])->name('update_formation');
    // Route::get('/delete_formation/{id}', [AdminController::class, 'delete_formation'])->name('delete_formation');
});

require __DIR__ . '/auth.php';
