<?php

use App\Http\Controllers\AvatarController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

//home
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');



//User

Route::get('/user', [UserController::class, 'index']);



//Avatar
Route::post('/create-avatar', [AvatarController::class, 'store']);



//Categorie
Route::get('/categorie', [CategorieController::class, 'index']);
Route::post('/create-categorie', [CategorieController::class, 'store']);


//Image

Route::get('/image', [ImageController::class, 'index']);
Route::post('/add-image', [ImageController::class, 'store']);

