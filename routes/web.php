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
Auth::routes(['register' => false]);

// PORTAL
Route::get('/', 'portalController@index')->name('portal');
    // BERITA
    Route::get('/api/show/berita', 'portalController@showBerita')->name('showberita');

// TENTANG
    // PROFIL
    Route::get('/tentang/profil', 'tentangController@index')->name('profil');
    Route::get('/tentang/indikatormutu', function () { return view('pages.tentang.imut'); })->name('imut');

// PELAYANAN
    // UNGGULAN
    Route::get('/pelayanan/unggulan', 'pelayananController@indexUnggulan')->name('unggulan');
    Route::get('/pelayanan/gawatdarurat', 'pelayananController@indexGawatDarurat')->name('gawatdarurat');
    Route::get('/pelayanan/rawatjalan', 'pelayananController@indexRawatJalan')->name('rawatjalan');
    Route::get('/pelayanan/rawatinap', 'pelayananController@indexRawatInap')->name('rawatinap');
    Route::get('/pelayanan/rawatintensif', 'pelayananController@indexRawatIntensif')->name('rawatintensif');
    Route::get('/pelayanan/penunjangmedis', 'pelayananController@indexPenunjangMedis')->name('penunjangmedis');

// JADWAL DOKTER
// Route::get('/jadwal', function () { return view('pages.jadwal-dokter'); })->name('jadwaldokter');
Route::get('/jadwal', 'jadwalDokterController@index')->name('jadwaldokter');
Route::get('/jadwal/push', 'jadwalDokterController@pushApi');
Route::get('/kontak', function () { return view('pages.kontak'); })->name('kontak');

// Route::any('captcha-test', function() {
//     if (request()->getMethod() == 'POST') {
//         $rules = ['captcha' => 'required|captcha'];
//         $validator = validator()->make(request()->all(), $rules);
//         if ($validator->fails()) {
//             echo '<p style="color: #ff0000;">Incorrect!</p>';
//         } else {
//             echo '<p style="color: #00ff30;">Matched :)</p>';
//         }
//     }

//     $form = '<form method="post" action="captcha-test">';
//     $form .= '<input type="hidden" name="_token" value="' . csrf_token() . '">';
//     $form .= '<p>' . captcha_img() . '</p>';
//     $form .= '<p><input type="text" name="captcha"></p>';
//     $form .= '<p><button type="submit" name="check">Check</button></p>';
//     $form .= '</form>';
//     return $form;
// });


// --------------------------------------------  OLD  --------------------------------------------

// BERITA
// Route::get('/artikel/berita/{id}', 'artikelController@showBerita')->name('artikel.berita');


// JADWAL PELAYANAN
// Route::get('/jadwalpelayanan/api/data', 'jadwalPelayananController@apiData')->name('jadwalpelayanan.api');
// Route::get('/jadwalpelayanan', 'jadwalPelayananController@index')->name('jadwalpelayanan');

// Route::get('/kontak', function () { return view('pages.kontak'); })->name('kontak');
Route::get('/sejarah', function () { return view('pages.sejarah'); })->name('sejarah');
Route::get('/visimisi', function () { return view('pages.visimisi'); })->name('visimisi');
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
