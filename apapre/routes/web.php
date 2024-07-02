<?php

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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class,'index'] );
Route::get('/events/create', [EventController::class,'create'] );
Route::get('/events/doacao', [EventController::class,'doacao'] );
Route::get('/events/cadastro', [EventController::class,'cadastro'] );
Route::get('/events/entrar', [EventController::class,'entrar'] );
Route::get('/events/home', [EventController::class,'home'] );
Route::get('/events/cadastroevento', [EventController::class,'cadastroevento'] );