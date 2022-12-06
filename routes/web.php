<?php

use App\Http\Controllers\LivroController;
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
Route::get('/index', [LivroController::class, 'index'])->name('livros.index');
Route::get('/create', [LivroController::class, 'create'])->name('livros.create');
Route::post('/store', [LivroController::class, 'store'])->name('livros.store');
// se usa o post para mandar info o get recebe info
Route::get('/show/{id}', [LivroController::class, 'show'])->name('livros.show');
//se usa o get pq quer ir buscar as info
