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

Route::get('/', function () {
    return view('master')->with(["fit" => ""]);
})->name('master');

Route::get('/marques', function () {
    return view('layouts.marques');
})->name('marques');

Route::get('/notre_entreprise', function () {
    return view('layouts.notreEntreprise');
})->name('entreprise');

Route::get('/planete_et_societe', function () {
    return view('layouts.planeteSociete');
})->name('planeteSociete');

Route::get('/home', function(){
    return view('layout.home');
});
