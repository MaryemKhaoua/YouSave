<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\BloodTypeController;
use App\Http\Controllers\PostController;
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
Route::middleware(['admin', 'auth'])->group(function () {
//route for admin
Route::get('/dashboard', [AdminController::class, 'statistics'])->name('dashboard');
Route::get('/cities', [CityController::class, 'index'])->name('cities.index');
Route::post('/cities', [CityController::class, 'store'])->name('cities.store');
Route::post('/editCity/{id}', [CityController::class, 'updateCity'])->name('cityUpdate');
Route::get('/editCity/{id}', [CityController::class, 'edit'])->name('edit');
Route::delete('/cities/{city}', [CityController::class, 'destroy'])->name('cities.destroy');
Route::get('/bloods', [BloodTypeController::class, 'index'])->name('bloods.index');
Route::post('/bloods', [BloodTypeController::class, 'store'])->name('bloods.store');
Route::put('/bloods/{blood}', [BloodTypeController::class, 'update'])->name('bloods.update');
Route::delete('/bloods/{blood}', [BloodTypeController::class, 'destroy'])->name('bloods.destroy');

//UserBan
Route::get('/gestionUser', [AdminController::class, 'gestionUser'])->name('gestionUser');
Route::post('/updateUser/{id}', [AdminController::class, 'updateUserRole'])->name('updateUser');
Route::post('/banuser/{id}', [AdminController::class, 'BanUser'])->name('banuser');
//--------------------end rputes for admin ----------------------------------------
});
//route for auth

Route::get('/register', [AuthController::class, 'index'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('user.register');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('user.login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::get('/statistics', [AdminController::class, 'statistics'])->name('admin.statistics');


//route for testing error

Route::get('/403', [AdminController::class, 'error'])->name('error');




//route for user
Route::get('/', [UserController::class, 'create'])->name('home');
// Route::get('/searchpage', [UserController::class, 'searchPage'])->name('search.page');
Route::get('/apropos', [UserController::class, 'apropos'])->name('apropos.page');

Route::get('/users', [UserController::class, 'showUsers'])->name('users.show');
//route for updating profil
Route::put('/update-profile', [AuthController::class, 'updateProfile'])->name('update.profile');

//route for posts
Route::get('/posts', [PostController::class, 'index'])->name('post.index');
Route::post('/posts/create', [PostController::class, 'store'])->name('posts.store');
Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.delete');
//route for comment
Route::post('/comment/{postId}', [PostController::class, 'addComment'])->name('addComment');
Route::put('/comment/{id}', [PostController::class, 'updateComment'])->name('updateComment');
Route::delete('/comment/{id}', [PostController::class, 'deleteComment'])->name('deleteComment');


//filter
Route::post('/filter', [UserController::class, 'filter'])->name('filter');



//----------------------route for type blood details pages---------------------------
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