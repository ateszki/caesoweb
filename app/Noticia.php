<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Models\SleepingOwlModel;
use Storage;



class Noticia extends SleepingOwlModel
{
    protected $fillable = ["titulo","bajada","texto","habilitado","orden","slug"];

    public function imagen(){
    	$mimetype = array( 
                'gif'=>'image/gif', 
                'png'=>'image/png', 
                'jpg'=>'image/jpeg', 
                ); 
        foreach ($mimetype as $ext=>$type){
            if (Storage::has('noticias/'.$this->id.".".$ext)){
                return true;
                break;
            }
        }
        return false;

    }

    public function slugify()
		{ 

		  $text = $this->titulo;
		  // replace non letter or digits by -
		  $text = preg_replace('~[^\\pL\d]+~u', '-', $text);

		  // trim
		  $text = trim($text, '-');

		  // transliterate
		  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

		  // lowercase
		  $text = strtolower($text);

		  // remove unwanted characters
		  $text = preg_replace('~[^-\w]+~', '', $text);

		  if (empty($text))
		  {
		    return 'n-a';
		  }

		  $this->slug = $text;
		}
}
