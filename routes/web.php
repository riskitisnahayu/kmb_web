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
    return view('master');
});

Route::get('/nonmember', function () {
    return view('auth/nonmember');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('user')->group(function() {
	Route::get('/', function () {
		return view('auth/user');
	});
	Route::get('/login', function () {
		return view('auth/login');
	});
	Route::get('/register', function () {
		return view('auth/register');
	});

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function() {
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/pendaftaran/aktif/{id}', 'ManagePendaftaranController@aktif');
	Route::post('/pendaftaran/aktif/{id}', 'ManagePendaftaranController@aktif');
	Route::resource('manageadmins', 'ManageAdminController');
	Route::resource('pendaftaran', 'ManagePendaftaranController');
	Route::resource('pengurus', 'ManagePengurusController');
	Route::resource('jabatan', 'JabatanController');
});

/*Route::get('/daftar', function() {
	return view('daftar');
});*/
Route::post('/konfirmasi', 'KonfirmasiController@store')->name('konfirmasi');
Route::get('/daftar', 'KonfirmasiController@create');

Route::get('/konfirmasi', function() {
	return view('konfirmasi');
});
Route::get('/welcome', function() {
	return view('welcome');
});

/*START OF KEAHLIAN*/
Route::get('data/jabatan', 'JabatanController@index');

Route::get('data/jabatan/tambah','JabatanController@create');
Route::post('data/jabatan/simpan', 'JabatanController@store');

Route::get('data/jabatan/{id}/edit', 'JabatanController@edit');
Route::post('data/jabatan/{id}/edit', 'JabatanController@update');

Route::get('data/jabatan/{id}/delete', 'JabatanController@destroy');

/*END OF KEAHLIAN*/
