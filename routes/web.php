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

//Route::get('/', 'ApprenantsController@index');

Route::resource('','ApprenantsController');

Route::delete('/{id}','ApprenantsController@destroy')->name('apprenants.delete');

route::get('/update/{id}','ApprenantsController@edit')->name('apprenants.show');

route::put('/update/{id}','ApprenantsController@update')->name('apprenants.update');

route::get('display','ApprenantsController@display');

route::get('signature',function(){
	return view('pages.signature');
});

Route::post('test',function(){
	return 'test';
});
