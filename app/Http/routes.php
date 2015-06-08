<?php

//Main
Route::get('/', 'MainController@index');

//Syllabus
Route::get('create', 'SyllabusController@create');
Route::get('home', 'SyllabusController@overview');
Route::post('create', 'SyllabusController@saveSyllabus');

Route::get('detail/{id}', 'SyllabusController@detail');
Route::get('edit/{id}', 'SyllabusController@edit');
Route::get('link/{id}', 'SyllabusController@link');
Route::get('delete/{id}', 'SyllabusController@delete');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
