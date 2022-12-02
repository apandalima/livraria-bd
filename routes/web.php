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
Route::post('/store', [LivroController::class, 'create'])->name('livros.route');
// se usa o post para mandar info o get recebe info
