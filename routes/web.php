<?php

use App\Http\Controllers\MedicineController;
use App\Http\Controllers\ProductController;
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




