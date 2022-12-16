<?php

use App\Http\Controllers\AdministradorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Productocontroller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MensajeriaController;
use App\Http\Controllers\TatuajeController;


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

Route::get('/editUser', function (){
    return view('Usuario.Edit');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', function (){
    return view('sesion.login');
});

Route::get('/about', function (){
    return view('about.about');
});

Route::get('/GestionFavoritos', function (){
    return view('Productos.favorites');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/agenda/{id}/confirmDelete', [AgendaController::class, 'confirmDelete']);

Route::get('/login', function (){
    return view('sesion.login');
});

//rutas para controladores resource
Route::resource('/productos', Productocontroller::class);

Route::resource('/mensajes', MensajeriaController::class);

Route::resource('/user', UserController::class);

Route::resource('/tatuajes', TatuajeController::class);

Route::resource('/agenda', AgendaController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

