<?php

use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\ProveedoreController;
use App\Http\Controllers\IngresoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Route as RouteFacade;
// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return redirect('/login');
  });


Auth::routes();
Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');



// Route::get('/welcome', [\reources\\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

//agregar y modificar medicamentos
Route::resource('/medicamentos', MedicamentoController::class);
Route::resource('/medicamentos/cretate', 'MedicamentoController@create');

//agregar y modificar proveedores
Route::resource('/proveedores', ProveedoreController::class);
//campo de ingresos
Route::resource('/ingresos', IngresoController::class);
