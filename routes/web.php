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

	Route::get('/application-menus',[
		'as'	=>	'app.menu',
		'uses'	=>	'Admin\MenuController@index'
	]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
