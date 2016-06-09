<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Curriculum;

class BolsaDeTrabajoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $cvs = Curriculum::orderBy('created_at','desc');
        if($request->has('term')){
            $cvs->whereRaw(" concat(curricula.nombre,' ',curricula.apellido,' ',curricula.email,' ',curricula.puesto,' ',curricula.domicilio, ' ',curricula.localidad, ' ',curricula.provincia, ' ',curricula.dni) like ?",['%'.$request->get('term').'%']);
        }
        return view('bdt-consulta',["cvs"=>$cvs->paginate(25),"term"=>$request->get('term')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cv = Curriculum::findOrFail($id);

        return view('bdt-consulta-show',["cv"=>$cv]);
    }

    
}
