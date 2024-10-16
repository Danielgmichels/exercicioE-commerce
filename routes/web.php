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

//Rotas para o site

Route::get('home', function(){
    return view('site/home');
})->name('home');

Route::get('politica-de-privacidade', function(){
    return view('site/politica');
})->name('politica');

Route::get('Contato', function(){
    return view('site/Contato');
})->name('Contato');


//Rotas para o admin
Route::group([
    "prefix" => "admin",
    "as" => "admin."
], function(){

    Route::get('dashboard', function(){
        return view('admin/dashboard');
    })->name('dashboard');

    Route::get('produtos', function(){
        return view('admin/produtos');
    })->name('produtos');

});
