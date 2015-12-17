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

Route::post('contacto', function(){
		$data = Input::all();
		$mail = Mail::send('contacto', ["data"=>$data], function ($message) use($data) {
		    $message->from('info@caeso.com.ar', 'Caeso');
		    $message->to('info@caeso.com.ar');
		    $message->subject("Nuevo contacto desde Web Caeso");
		    $message->replyTo($data["email"], $data["name"]);
		});
		if($mail){
			return response()->json(["estado"=>"exito","mensaje"=>"Gracias por contactarse con nosotros, le responderemos a la brevedad"]);
			//return redirect('/previa#contacto')->with("exito","Gracias por contactarse con nosotros, le responderemos a la brevedad");
		} else {
			return response()->json(["estado"=>"error","mensaje"=>"No se pudo envíar el mensaje, intente nuevamente"]);
			//return back()->withErrors(['msg', 'No se pudo envíar el mensaje, intente nuevamente']);;
		}
});