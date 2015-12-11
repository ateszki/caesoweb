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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/previa',function(){
	$noticias = App\Noticia::where('habilitado','=',1)->get();
	return view('inicio',["noticias"=>$noticias]);
});
Route::get('noticias/{slug}','NoticiasController@show');

Route::get('noticias/{id}/imagen','NoticiasController@Imagen');