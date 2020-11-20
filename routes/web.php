<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramaController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('programa/{id_programa}', [ProgramaController::class, 'showPrograma'])->name('programa.id');

Route::middleware(['auth:sanctum', 'verified'])->get('etdh', [ProgramaController::class, 'etdh'])->name('etdh');

Route::middleware(['auth:sanctum', 'verified'])->get('pregrado', [ProgramaController::class, 'pregrado'])->name('pregrado');

Route::middleware(['auth:sanctum', 'verified'])->get('posgrado', [ProgramaController::class, 'posgrado'])->name('posgrado');

Route::middleware(['auth:sanctum', 'verified'])->get('extension', [ProgramaController::class, 'extension'])->name('extension');
