<?php

use App\Http\Controllers\gameController;
use App\Http\Controllers\genreController;
use App\Http\Controllers\publisherController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\logAdmin;
use App\Http\Controllers\adminDashboardController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\logAdminController;
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

Route::get('/', [indexController::class, 'index']);

Route::get('/admin-dashboard/data-game/create-game', [gameController::class, 'CreateGame']);

Route::get('/admin-dashboard/data-game', [gameController::class, 'readGame']);

Route::get('/update-game', [gameController::class, 'updateGame']);

Route::get('/detail-game-admin/{slug}', [gameController::class, 'detailGameAdmin']);

Route::get('/admin-dashboard', [adminDashboardController::class, 'adminDashboard']);

Route::get('/admin-dashboard/data-genre', [genreController::class, 'readGenre']);

Route::get('/admin-dashboard/data-publisher', [publisherController::class, 'readPublisher']);

Route::get('/create-publisher', [publisherController::class, 'createPublisher']);

Route::get('/update-publisher', [publisherController::class, 'updatePublisher']);

Route::get('/admin-dashboard/data-admin', [adminController::class, 'readAdmin']);

Route::get('/register-admin', [adminController::class, 'createAdmin']);

Route::get('/login-admin', [logAdminController::class, 'loginAdmin']);

Route::post('/admin-dashboard/data-genre/store', 'genreController@store');
