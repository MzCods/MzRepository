<?php

use App\Http\Controllers\EtudiantController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/etudiant/create', [EtudiantController::class, 'create']);
Route::post('/store', [EtudiantController::class, 'store']);
Route::get('/projet', [App\Http\Controllers\EtudiantController::class, 'index'])->name('projet.show');
