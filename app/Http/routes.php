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

Route::get('/', 'WelcomeController@index');

Route::get('home', ['middleware'=>'auth', 'uses'=>'HomeController@index']);

Route::post('/auth/users/update/{id}', ['middleware'=>'auth', 'uses'=> 'Auth\AuthController@updateUser']);
Route::get('/auth/users/elimina/{id}', ['middleware'=>'auth', 'uses'=>'Auth\AuthController@elimina']);
Route::get('/auth/users/{id?}', ['middleware'=>'auth', 'uses'=> 'Auth\AuthController@getUsers']);

Route::get('protected', ['middleware' => ['auth', 'admin'], function() {
    return "Riservato agli amministratori";
}]);
//Route::post('/auth/register', ['middleware'=>'auth', 'uses'=> 'Auth\AuthController@postRegister']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::get('test', ['middleware'=>'auth', 'uses'=>'TestController@index']); 
// Route::get('test', ['middleware'=>'auth', 'uses'=>'TestController@getList']);
Route::post('test', ['middleware'=>'auth', 'uses'=>'TestController@getList']);
// Route::post('test/user', ['middleware'=>'auth', 'uses'=>'TestController@getList']);
// Route::get('test/all', ['middleware'=>'admin', 'uses'=>'TestController@index']);
Route::get('test/nuovo', ['middleware'=>'auth', 'uses'=>'TestController@nuovo']);
Route::get('test/elimina/{id}', ['middleware'=>'auth', 'uses'=>'TestController@elimina']);
//Route::get('test/{id_user?}', ['middleware'=>'admin', 'uses'=>'TestController@index']);
Route::get('test/{id}', ['middleware'=>'auth', 'uses'=>'TestController@show']);
Route::get('test/{id}/export', ['middleware'=>'auth', 'uses'=>'TestController@export']);
Route::post('test/nuovo', ['middleware'=>'auth', 'uses'=>'TestController@store']);
Route::get('test/{id}/edit', ['middleware'=>'auth', 'uses'=>'TestController@edit']);
Route::post('test/{id}/edit', ['middleware'=>'auth', 'uses'=>'TestController@update']);

//Route::resource('risposte', 'RisposteController');
Route::post('test/counter', ['middleware'=>'auth', 'uses'=>'TestCounterController@counter']);
Route::post('test/paziente',['middleware'=>'auth', 'uses'=>'TestController@update']);
Route::post('test/risposte', ['middleware'=>'auth', 'uses'=>'RisposteController@update']);
Route::post('test/risultati', ['middleware'=>'auth', 'uses'=>'RisultatiController@update']);
Route::post('test/item_critici', ['middleware'=>'auth', 'uses'=>'RisultatiController@item_critici']);
Route::post('test/{id}', ['middleware'=>'auth', 'uses'=>'RisultatiController@store']);
Route::get('risultati/{id}', ['middleware'=>'auth', 'uses'=>'RisultatiController@index']);


//Route::get('risposte/{id}', 'RisposteController@index');


//Route::get('test/{id}/risposte', 'RisposteController@inserisci');



