<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Storage;


class Curriculum extends Model
{
    protected $table ="curricula";

    protected $appends = ['edad','nomap'];

    protected $dates = ["created_at","updated_at","fecha_nacimiento"];

    protected $fillable = ['nombre'
            ,'apellido'
            ,'dni'
            ,'fecha_nacimiento'
            ,'puesto'
            ,'domicilio'
            ,'localidad'
            ,'provincia'
            ,'telefono'
            ,'celular'
            ,'email'
            ,'nombre'
            ,'linkedin'];

    public function archivo(){
    	$mimetype = array( 
                'doc'=>'word', 
                'docx'=>'word', 
                'pdf'=>'pdf', 
                ); 
        foreach ($mimetype as $ext=>$type){
            if (Storage::has('curriculums/'.$this->id.".".$ext)){
                return true;
                break;
            }
        }
        return false;

    }

    public function getEdadAttribute(){
        return $this->fecha_nacimiento->age;
    }
    public function getNomapAttribute(){
        return $this->apellido.", ".$this->nombre;
    }
}
