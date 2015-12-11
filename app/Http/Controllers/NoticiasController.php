<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Noticia;
use Storage;

class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return false;
    }

    public function imagen($id){
        $noticia = Noticia::findOrFail($id);
        $mimetype = array( 
                'gif'=>'image/gif', 
                'png'=>'image/png', 
                'jpg'=>'image/jpeg', 
                ); 
        $content = NULL;
        $mime = NULL;
        $nombre = NULL;
        foreach ($mimetype as $ext=>$type){
            if (Storage::has('noticias/'.$noticia->id.".".$ext)){
                $content = Storage::get('noticias/'.$noticia->id.".".$ext);
                $nombre = $noticia->id.".".$ext;
                $mime = $type;
                break;
            }
        }
        if($content == NULL){
            abort(404);
        }

        return response($content)->header('Content-Type', $mime)->header('filename', $nombre);         
           
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $noticia = Noticia::where('slug','=',$slug)->firstOrFail();

        return view('noticias',["noticia"=>$noticia]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
