<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apifront;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/libros',[apifront::class, 'index']);
Route::get('/generos',[apifront::class, 'generos']);
Route::get('/disponibilidad',[apifront::class, 'disponibilidad']);
Route::post('/editar/{id}',[apifront::class, 'editar']);
Route::post('/crear',[apifront::class, 'crear']);
Route::delete('/borrar/{id}',[apifront::class, 'eliminar']);

