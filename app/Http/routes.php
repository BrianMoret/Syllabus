<?php

//Main
Route::get('/', 'MainController@index');
Route::get('createteacher', 'Createteachercontroller@index');
Route::post('createteacher', 'Createteachercontroller@store');

//Syllabi


Route::get('home', 'SyllabusController@overview');
Route::get('overview', 'SyllabusController@overview');
Route::get('syllabus/create', 'SyllabusController@createSyllabi');
Route::post('syllabus/create', 'SyllabusController@saveSyllabi');

Route::get('syllabus/edit/{id}', 'SyllabusController@editSyllabi');
Route::get('syllabus/link/{id}', 'SyllabusController@linkSyllabi');
Route::get('syllabus/delete/{id}', 'SyllabusController@deleteSyllabi');
Route::get('syllabus/{id}', 'SyllabusController@overviewItems');



//Syllabusitems

Route::get('overview/items/{id}', 'SyllabusController@overviewItems');
Route::get('item/create', 'SyllabusController@createItem');
Route::post('item/create', 'SyllabusController@saveSyllabusItem');

Route::get('item/detail/{id}', 'SyllabusController@detailItem');
Route::get('item/edit/{id}', 'SyllabusController@editItem');
Route::get('item/link/{id}', 'SyllabusController@linkItem');
Route::get('item/delete/{id}', 'SyllabusController@deleteSyllabusItem');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
