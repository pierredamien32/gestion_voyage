<?php

use App\Http\Controllers\LogementController;
use App\Http\Controllers\SejourController;
use App\Http\Controllers\VoyageurController;
use App\Models\Logement;
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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [LogementController::class,'index'])->name('logement.index');
Route::get('/logements/create', [LogementController::class,'create'])->name('logement.create');
Route::post('/logements/add', [LogementController::class,'store'])->name('logement.store');
Route::get('/logements/edit/{id}', [LogementController::class,'edit'])->name('logement.edit');
Route::put('/logements/update/{id}', [LogementController::class,'update'])->name('logement.update');
Route::delete('/logements/delete/{id}', [LogementController::class,'destroy'])->name('logement.destroy');


Route::get('/voyageurs', [VoyageurController::class,'index'])->name('voyageur.index');
Route::get('/voyageurs/create', [VoyageurController::class,'create'])->name('voyageur.create');
Route::post('/voyageurs/add', [VoyageurController::class,'store'])->name('voyageur.store');
Route::get('/voyageurs/edit/{id}', [VoyageurController::class,'edit'])->name('voyageur.edit');
Route::put('/voyageurs/update/{id}', [VoyageurController::class,'update'])->name('voyageur.update');
Route::delete('/voyageurs/delete/{id}', [VoyageurController::class,'destroy'])->name('voyageur.destroy');


Route::get('/sejours', [SejourController::class,'index'])->name('sejour.index');
Route::get('/sejours/create', [SejourController::class,'create'])->name('sejour.create');
Route::post('/sejours/add', [SejourController::class,'store'])->name('sejour.store');
Route::get('/sejours/edit/{id}', [SejourController::class,'edit'])->name('sejour.edit');
Route::put('/sejours/update/{id}', [SejourController::class,'update'])->name('sejour.update');
Route::delete('/sejours/delete/{id}', [SejourController::class,'destroy'])->name('sejour.destroy');