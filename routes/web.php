<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UploadFile;
use App\Http\Controllers\TryActionController;
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


Route::get('/try', function() {
    return view('trynow');
});


Route::get('/login', function() {
    $errorMsg = '';
    return view('login')->with('errorMsg', $errorMsg);
});


Route::get('/subscribe', function() {
    return view('subscribe');
});


Route::get('/yourprofile', function() {
    return view('yourprofile');
});

Route::post('login', [LoginController::class, 'checkLogin'])->name('login.checkLogin');
Route::post('UploadFile', [UploadFile::class, 'uploadCSV']);
Route::post('actionTry', [TryActionController::class, 'tryAction']);