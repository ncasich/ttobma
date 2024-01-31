<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return die(phpinfo());
});

Route::get('/new-test', function () {
    return '<h3>Hello from NEW!!!</h3>';
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => []], function () {
    Route::group(['middleware' => ['auth']], function () {
        include 'videos/web.php';
    });
});
