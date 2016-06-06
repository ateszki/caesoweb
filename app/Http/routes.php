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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');


Route::group(['middleware' => 'auth'], function () {
	Route::get('auth/logout', 'Auth\AuthController@getLogout');
});
	Route::resource('bolsa-de-trabajo/consulta','BolsaDeTrabajoController',['only' => ['index', 'show']]);

Route::get('/',function(){
	$noticias = App\Noticia::where('habilitado','=',1)->get();
	return view('inicio',["noticias"=>$noticias]);
});

Route::get('/test',function(){
	$noticias = App\Noticia::where('habilitado','=',1)->get();
	return view('inicio-test',["noticias"=>$noticias]);
});

Route::get('noticias/{slug}','NoticiasController@show');

Route::get('noticias/{id}/imagen','NoticiasController@Imagen');

Route::get('bolsa-de-trabajo',function(){
	$puestos = ['Odontólogo/a','Administrativo/a','Técnico/a','Recepcionista','Otros'];
	$provincias = json_decode('[{"state":"Capital Federal","country":"Argentina"},{"state":"Buenos Aires","country":"Argentina"},{"state":"Catamarca","country":"Argentina"},{"state":"Chaco","country":"Argentina"},{"state":"Chubut","country":"Argentina"},{"state":"Cordoba","country":"Argentina"},{"state":"Corrientes","country":"Argentina"},{"state":"Entre Rios","country":"Argentina"},{"state":"Formosa","country":"Argentina"},{"state":"Jujuy","country":"Argentina"},{"state":"La Pampa","country":"Argentina"},{"state":"La Rioja","country":"Argentina"},{"state":"Mendoza","country":"Argentina"},{"state":"Misiones","country":"Argentina"},{"state":"Neuquen","country":"Argentina"},{"state":"Rio Negro","country":"Argentina"},{"state":"Salta","country":"Argentina"},{"state":"San Juan","country":"Argentina"},{"state":"San Luis","country":"Argentina"},{"state":"Santa Cruz","country":"Argentina"},{"state":"Santa Fe","country":"Argentina"},{"state":"Santiago del Estero","country":"Argentina"},{"state":"Tierra del Fuego","country":"Argentina"},{"state":"Tucuman","country":"Argentina"}]');
	return view('bolsa',["provincias"=>$provincias,"puestos"=>$puestos,"mensaje"=>false]);

});

Route::post('bolsa-de-trabajo',function(){
	$data = Input::all();

	$validator = Validator::make(Input::all(), [
            'nombre' => 'required|max:255',
            'apellido' => 'required|max:255',
            'dni' => 'required|numeric',
            'fecha_nacimiento' => 'required|date',
            'puesto' => 'required|max:255',
            'domicilio' => 'required|max:255',
            'localidad' => 'required|max:255',
            'provincia' => 'required|max:255',
            'telefono' => 'required|max:255',
            'celular' => 'required|max:255',
            'email' => 'required|email',
            'linkedin' => 'required|url',
        ]);

        if ($validator->fails()) {
            return redirect('bolsa-de-trabajo')
                        ->withErrors($validator)
                        ->withInput();
        }


	$cv = App\Curriculum::create($data);

	if(Request::hasFile('cv')){
	    $arch = Request::file('cv');
	    Storage::put('curriculums/'.$cv->id.'.'.$arch->getClientOriginalExtension(),File::get($arch));
    }
    return view('bolsa',["mensaje"=>true]);
});

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
		} else {
			return response()->json(["estado"=>"error","mensaje"=>"No se pudo envíar el mensaje, intente nuevamente"]);
		}
});
Route::post('adhesion', function(){
		$data = Input::all();
		$A = App\Adhesion::create($data);
		$mail = Mail::send('adhesion', ["data"=>$data], function ($message) use($data) {
		    $message->from('info@caeso.com.ar', 'Caeso');
		    $message->to('info@caeso.com.ar');
		    $message->subject("Nueva solicitud de adhesión desde Web Caeso");
		    $message->replyTo($data["email"], $data["responsable"]);
		});
		if($mail){
			return response()->json(["estado"=>"exito","mensaje"=>"Gracias por enviar su solicitud de adhesión, le responderemos a la brevedad"]);
		} else {
			return response()->json(["estado"=>"error","mensaje"=>"No se pudo envíar la solicitud, intente nuevamente"]);
		}
});