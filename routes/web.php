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

//HomeControll
Route::get('/', ['uses' => 'HomeController@beranda', 'as' => 'index']);
Route::get('/tentangkami', ['uses' => 'HomeController@tentangkami', 'as' => 'tentangkami']);
Route::get('/berita', ['uses' => 'HomeController@berita', 'as' => 'berita']);
Route::get('/beranda', ['uses' => 'HomeController@beranda', 'as' => 'beranda']);
Route::get('/formpendaftaran', ['uses' => 'HomeController@formpendaftaran', 'as' => 'formpendaftaran']);
Route::post('/formpendaftaranproses', ['uses' => 'HomeController@formpendaftaranproses', 'as' => 'formpendaftaranproses']);
Route::get('/login', ['uses' => 'HomeController@login', 'as' => 'login']);
Route::get('/hubungikami', ['uses' => 'HomeController@hubungikami', 'as' => 'hubungikami']);

//AdminControll
Route::get('/admin', ['uses' => 'AdminController@admin', 'as' => 'admin']);
Route::get('/kelolaberanda', ['uses' => 'AdminController@kelolaberanda', 'as' => 'kelolaberanda']);
Route::get('/kelolaberita', ['uses' => 'AdminController@kelolaberita', 'as' => 'kelolaberita']);
Route::get('/editberita/{id}', ['uses' => 'AdminController@editberita', 'as' => 'editberita']);
Route::post('/editberitaproses', ['uses' => 'AdminController@editberitaproses', 'as' => 'editberitaproses']);
Route::get('/kelolacalonpendonor', ['uses' => 'AdminController@kelolacalonpendonor', 'as' => 'kelolacalonpendonor']);
Route::get('/keloladatapendonor', ['uses' => 'AdminController@keloladatapendonor', 'as' => 'keloladatapendonor']);
Route::get('/editadatapendonor/{id}', ['uses' => 'AdminController@editdatapendonor', 'as' => 'editdatapendonor']);
Route::post('/editadatapendonorproses/{id}', ['uses' => 'AdminController@editdatapendonorproses', 'as' => 'editdatapendonorproses']);
Route::get('/kelolapesanmasuk', ['uses' => 'AdminController@kelolapesanmasuk', 'as' => 'kelolapesanmasuk']);
Route::get('/kelolastokdarah', ['uses' => 'AdminController@kelolastokdarah', 'as' => 'kelolastokdarah']);
Route::get('/kelolatengangkami', ['uses' => 'AdminController@kelolatentangkami', 'as' => 'kelolatentangkami']);
Route::get('/tambahberita', ['uses' => 'AdminController@tambahberita', 'as' => 'tambahberita']);
Route::get('deleteberita/{id}', ['uses' => 'AdminController@deleteberita', 'as' => 'delete-berita']);
Route::post('/tambahberitaproses', ['uses' => 'AdminController@tambahberitaproses', 'as' => 'tambahberitaproses']);
Route::get('/updatestok', ['uses' => 'AdminController@updatestok', 'as' => 'updatestok']);
Route::post('/updatestokproses', ['uses' => 'AdminController@updatestokproses', 'as' => 'updatestokproses']);
Route::get('/aktifkan/{id}', ['uses' => 'AdminController@aktifkan', 'as' => 'aktifkan']);
Route::get('/hapus/{id}', ['uses' => 'AdminController@hapuscalonpendonor', 'as' => 'hapuscalon']);


//UserControll
Route::get('/user', ['uses' => 'UserController@user', 'as' => 'user']);
Route::get('/beritauser', ['uses' => 'UserController@berita', 'as' => 'beritauser']);
Route::post('/komentarproses', ['uses' => "UserController@submitkomentar", 'as' => 'submitkomentar']);
Route::get('/datapendonor', ['uses' => "UserController@datapendonor", 'as' => 'datapendonor']);
Route::get('/stokdarah', ['uses' => 'UserController@stokdarah', 'as' => 'stokdarah']);

//AuthControll
Route::post('auth/login', ['uses' => 'AuthController@login', 'as' => 'auth_login']);
Route::get('/logout', ['uses' => 'AuthController@logout', 'as' => 'auth_logout']);

?>