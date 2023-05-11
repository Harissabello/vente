<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\Dashclient;
use App\Http\Controllers\check;
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



 
Route::get('/', [PagesController::class, 'index']);
Route::get('/produit', [ProduitController::class, 'produit']);
Route::get('/dashbord', [Dashclient::class, 'dashbord']);
Route::get('/checkout', [Check::class, 'checkout']);
Route::get('/login', [Check::class, 'login']);
// Route::post('/register', [Check::class, 'register']);