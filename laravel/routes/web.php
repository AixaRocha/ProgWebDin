<?php
use illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginasController;
use App\Http\Controllers\MaterialesController;

Route::get('/', function (){
    return view('welcome');
});

Route::get('/vistas_materiales',[MaterialesController::class, 'index_materiales']);
Route::get ('/vistas_materiales/{id}', [MaterialesController::class, 'show_materiales']);