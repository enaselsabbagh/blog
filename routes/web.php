<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\BlogController;

Route::get('/count', [Admin::class, 'count']);
Route::get('/new', [BlogController::class, 'getNew'])->name('new.get');
Route::post('/new', [BlogController::class, 'postNew'])->name('new.post');;

Route::get('/e', [BlogController::class, 'index'])->name('home');
Route::get('/{id}', [BlogController::class, 'getSingle'])->name('single');


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
