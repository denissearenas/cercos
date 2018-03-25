<?php

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/index.php', function () {
    return view('home');
});

Route::get('/index.html', function () {
    return view('home');
});

Route::get('/cierre_basico', function () {
    return view('pages.cierre_basico');
});

Route::get('/cierre_malla', function () {
    return view('pages.cierre_malla');
});

Route::get('/cierre_frontis', function () {
    return view('pages.cierre_frontis');
});

Route::get('/contacto', function () {
    return view('pages.contacto');
});

Route::get('/acerca_de', function () {
    return view('pages.acerca_de');
});

Route::get('/productos', function () {
    return view('pages.productos');
});