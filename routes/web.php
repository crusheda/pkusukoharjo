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

Route::get('/', function () {
    return view('pages.index');
})->name('portal');
Route::get('/kontak', function () { return view('pages.kontak'); })->name('kontak');
Route::get('/sejarah', function () { return view('pages.sejarah'); })->name('sejarah');
Route::get('/visimisi', function () { return view('pages.visimisi'); })->name('visimisi');
Route::get('/portfolio-details.html', function () {
    return view('pages.portfolio-details');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
