<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditoraApi;
use App\Http\Controllers\AutorApi;
use App\Http\Controllers\LivroApi;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('editoras', [EditoraApi::class, 'index']);
Route::get('editoras/{id}', [EditoraApi::class, 'show']);
Route::post('editoras', [EditoraApi::class, 'store']);
Route::put('editoras/{id}', [EditoraApi::class, 'update']);
Route::delete('editoras/{id}', [EditoraApi::class, 'destroy']);

Route::get('autores', [AutorApi::class, 'index']);
Route::get('autores/{id}', [AutorApi::class, 'show']);
Route::post('autores', [AutorApi::class, 'store']);
Route::put('autores/{id}', [AutorApi::class, 'update']);
Route::delete('autores/{id}', [AutorApi::class, 'destroy']);

Route::get('livros', [LivroApi::class, 'index']);
Route::get('livros/{id}', [LivroApi::class, 'show']);
Route::post('livros', [LivroApi::class, 'store']);
Route::put('livros/{id}', [LivroApi::class, 'update']);
Route::delete('livros/{id}', [LivroApi::class, 'destroy']);
