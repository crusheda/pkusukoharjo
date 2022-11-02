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

// Route::get('/', function () { return view('pages.index'); })->name('portal');

Auth::routes();
// Auth::routes(['register' => false]);

// PORTAL
Route::get('/', 'portalController@index')->name('portal');

// JADWAL DOKTER
// Route::get('/jadwal', function () { return view('pages.jadwal-dokter'); })->name('jadwaldokter');
Route::get('/jadwal', 'jadwalDokterController@index')->name('jadwaldokter');
Route::get('/jadwal/push', 'jadwalDokterController@pushApi');
Route::get('/kontak', function () { return view('pages.kontak'); })->name('kontak');


// --------------------------------------------  OLD  --------------------------------------------

// BERITA
// Route::get('/artikel/berita/{id}', 'artikelController@showBerita')->name('artikel.berita');


// JADWAL PELAYANAN
// Route::get('/jadwalpelayanan/api/data', 'jadwalPelayananController@apiData')->name('jadwalpelayanan.api');
// Route::get('/jadwalpelayanan', 'jadwalPelayananController@index')->name('jadwalpelayanan');

// Route::get('/kontak', function () { return view('pages.kontak'); })->name('kontak');
// Route::get('/sejarah', function () { return view('pages.sejarah'); })->name('sejarah');
// Route::get('/visimisi', function () { return view('pages.visimisi'); })->name('visimisi');
// Route::get('/portfolio-details.html', function () { return view('pages.portfolio-details'); });

// API PORTAL
// Route::get('/api/show', 'portalController@show')->name('api.show');
// Route::get('/artikel/berita/api/show', 'portalController@showArtikel')->name('api.showArtikel');

// ----------------------------------------  ADMIN AREA  -----------------------------------------

// ADMIN
Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    // BERITA
    Route::get('posting/berita/api/data', 'posting\beritaController@apiData')->name('berita.api.data');
    Route::get('posting/berita/api/data/hapus/{id}', 'posting\beritaController@apiHapus')->name('berita.api.hapus');
    Route::resource('posting/berita', 'posting\beritaController');

    // JADWAL PELAYANAN
    Route::get('posting/jadwal/api/data', 'posting\jadwalController@apiData')->name('jadwal.api.data');
    Route::get('posting/jadwal/api/data/hapus/{id}', 'posting\jadwalController@apiHapus')->name('jadwal.api.hapus');
    Route::resource('posting/jadwal', 'posting\jadwalController');
});
