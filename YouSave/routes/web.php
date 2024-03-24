<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//route for auth

Route::get('/register', [AuthController::class, 'index'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('user.register');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('user.login');
Route::post('/login', [AuthController::class, 'login'])->name('login');

//route for admin
Route::get('/dashboard', [AdminController::class, 'create'])->name('dashboard');
Route::get('/cities', [CityController::class, 'index'])->name('cities.index');
Route::post('/cities', [CityController::class, 'store'])->name('cities.store');
Route::post('/editCity/{id}', [CityController::class, 'updateCity'])->name('cityUpdate');
Route::get('/editCity/{id}', [CityController::class, 'edit'])->name('edit');
Route::delete('/cities/{city}', [CityController::class, 'destroy'])->name('cities.destroy');



//route for user
Route::get('/', [UserController::class, 'create'])->name('home');
// Route::get('/searchpage', [UserController::class, 'searchPage'])->name('search.page');
Route::get('/apropos', [UserController::class, 'apropos'])->name('apropos.page');

Route::get('/users', [UserController::class, 'showUsers'])->name('users.show');


//----------------------route for type blood pages---------------------------
Route::get('/aplus', [UserController::class, 'aplus'])->name('aplus.page');
Route::get('/amoins', [UserController::class, 'amoins'])->name('amoins.page');
Route::get('/bplus', [UserController::class, 'bplus'])->name('bplus.page');
Route::get('/bmoins', [UserController::class, 'bmoins'])->name('bmoins.page');
Route::get('/abplus', [UserController::class, 'abplus'])->name('abplus.page');
Route::get('/abmoins', [UserController::class, 'abmoins'])->name('abmoins.page');
Route::get('/oplus', [UserController::class, 'oplus'])->name('oplus.page');
Route::get('/omoins', [UserController::class, 'omoins'])->name('omoins.page');
//--------------end route blood type --------------------------------------
//--------------user auth---------
Route::get('/profil', [UserController::class, 'profil'])->name('user.profil');