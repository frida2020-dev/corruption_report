<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[App\Http\Controllers\MainController::class, 'index']);


Route::get('/dashboard',[App\Http\Controllers\Admin\AdminController::class, 'dashboard']);
Route::get('/search/index', [\App\Http\Controllers\Admin\SearchController::class, 'index'])->name('index');
Route::get('/inprogress', [\App\Http\Controllers\Admin\InprogressController::class, 'index'])->name('index');

Route::get('/completed', [\App\Http\Controllers\Admin\CompletedController::class, 'index'])->name('index');
Route::get('/walk_in_case', [\App\Http\Controllers\Admin\WalkinController::class, 'index'])->name('index');
Route::get('/unattended', [\App\Http\Controllers\Admin\UnattendedController::class, 'index'])->name('index');
Route::get('/admins', [\App\Http\Controllers\Admin\AddAdminsController::class, 'index'])->name('index');

Route::get('/personalized', [\App\Http\Controllers\PersonalizedController::class, 'index'])->name('index');

Route::get('/anonymous', [\App\Http\Controllers\AnonymousController::class, 'index'])->name('index');

Route::post('/personalized/insert_data', [\App\Http\Controllers\PersonalizedController:: class, 'insert_data']);

Route::post('/anonymous/insert_data', [\App\Http\Controllers\AnonymousController:: class, 'insert_data']);

Route::get('/unattended/fetch_data/{id}', [\App\Http\Controllers\Admin\UnattendedController::class, 'fetch_data']);


