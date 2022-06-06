<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalDataController;

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

Route::get('/success', function () {return view('success');});
Route::post('/create-data', [App\Http\Controllers\PersonalDataController::class, 'createData'])->name('createData');
Route::get('personal-data/list', [PersonalDataController::class, 'getPersonalData'])->name('personal-data.list');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
