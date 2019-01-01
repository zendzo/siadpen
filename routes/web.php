<?php

Route::get('/', function () {
    return view('welcome');
})->middleware('guest');

// Administrator Sections
Route::group(['prefix'=>'admin','as'=>'admin.','middleware'=>'administrator'], function(){

	Route::get('/',[
		'as'	=>	'dashboard',
		'uses'	=>	'Admin\AdministratorController@index'
	]);

	Route::resource('role', 'Admin\RoleController');

	Route::resource('user', 'UserController');

	Route::resource('siswa', 'SiswaController');

	Route::resource('ruang', 'RuangController');

	Route::resource('tingkat', 'TingkatController');

	Route::resource('kelas', 'KelasController');

	Route::resource('guru', 'GuruController');

	Route::resource('pembayaran', 'PembayaranController');

	Route::resource('penilaian', 'PenilaianController');

	Route::get('laporan/siswa', 'LaporanController@siswa')->name('laporan.siswa');

	Route::get('laporan/guru', 'LaporanController@guru')->name('laporan.guru');


	Route::get('/application-menus',[
		'as'	=>	'app.menu',
		'uses'	=>	'Admin\MenuController@index'
	]);
});

// Siswa Sections
Route::group(['prefix'=>'siswa','as'=>'siswa.','middleware'=>'auth'], function(){

	Route::get('/',[
		'as'	=>	'dashboard',
		'uses'	=>	'Siswa\SiswaController@index'
	]);

	Route::get('profile','Siswa\SiswaController@profile')->name('profile');

	Route::post('profile','Siswa\SiswaController@profileStore')->name('profile.store');

	Route::get('profile/edit/{nis}','Siswa\SiswaController@profileEdit')->name('profile.edit');

	Route::patch('profile/update/{siswa}','Siswa\SiswaController@profileUpdate')->name('profile.update');

	Route::get('pembayaran/create', function(){
		return view('Xenon.siswa.pembayaran.create');
	})->name('pembayaran');

	Route::post('pembayaran','Siswa\PembayaranController@store')->name('pembayaran.store');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('siswa/search', 'SearchSiswaController@create')->name('search.form');

Route::post('siswa','SearchSiswaController@search')->name('search.siswa');

Route::get('siswa/{nis}','SearchSiswaController@show')->name('siswa.show');

