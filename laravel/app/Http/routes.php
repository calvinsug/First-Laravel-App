<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'WelcomeController@index');

/*Route::get('/','PageController@index');
Route::get('home','WelcomeController@home');
Route::get('about','WelcomeController@about');
*/

//Login & Register Template
Route::get('', 'HomeController@index');

/* untuk langsung memanggil view tanpa melalui Controller
Route::get('', function(){

	return View::make('home');
});*/

//Route::get('songs','SongsController@index');

//Route::get('songs/{id}','SongsController@show');
//Route::model('song','App\Song');   -> use primary key



//Tutorial 08
/*Route::bind('song',function($slug){

	return App\Song::where('slug',$slug)->first();

});

get('songs','SongsController@index');
get('songs/{song}','SongsController@show');
get('songs/{song}/edit','SongsController@edit');*/


	/*Route::bind('song', function($slug){

		return \App\Song::whereSlug($slug)->first();
	});*/

//get('songs','SongsController@index');
	/*get('songs/{slug}','SongsController@show');
	get('songs/{slug}/edit','SongsController@edit');

	patch('songs/{slug}', 'SongsController@update');*/

//get('songs/{song}','SongsController@show');
//get('songs/{song}/edit','SongsController@edit');

//patch('songs/{song}', 'SongsController@update');


$router->bind('songs',function($slug){
	return \App\Song::whereSlug($slug)->first();
});

$router->bind('member',function($id){
	return \App\Member::whereId($id)->first();
});

/*$router->resource('songs','SongsController', [
	'only' => [
		'index','show','edit'
	],
	'except' => [
		'create'
	]
]);
*/

$router->resource('songs','SongsController');

$router->resource('member','MemberController');


	//Route::get('page','PageController@index');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
