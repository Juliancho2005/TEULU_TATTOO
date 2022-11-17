<?php

use App\Http\Controllers\AdministradorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Productocontroller;
use App\Http\Controllers\MensajeriaController;
use App\Http\Controllers\UsersController;

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

//ruta para enviar una vista sin CRUD
Route::get('/index', function (){
    return view('main.index');
});

//rutas para controladores resource
Route::resource('/productos', Productocontroller::class);

Route::resource('/mensajes', MensajeriaController::class);

Route::resource('/user', UsersController::class);
