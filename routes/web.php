<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'register'=>false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::group(array('namespace'=>'Backend'),funtion(){
//    Route::get('/ringtones','RingtoneController@create');
//});

Route::group(array('namespace'=>'Backend'),function(){
    Route::resource('/ringtones','RingtoneController');
});
