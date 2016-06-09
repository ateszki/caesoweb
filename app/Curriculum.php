<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Models\SleepingOwlModel;
use Storage;




class Curriculum extends SleepingOwlModel
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

    public function scopeDefaultSort($query)
    {
        return $query->orderBy('created_at', 'desc');
    }
}
