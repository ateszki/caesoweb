<?php

namespace App\Providers;

use File;
use Storage;
use App\Noticia;
use App\User;
use Request;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Noticia::creating(function($noticia){
            $noticia->slugify();
        });

        Noticia::saving(function($noticia){
            if(Request::hasFile('imagen')){
                $arch = Request::file('imagen');
                Storage::put('noticias/'.$noticia->id.'.'.$arch->getClientOriginalExtension(),File::get($arch));
                $data = File::get($arch);
                
            } 
        }); 
        User::saving(function($user){
            if(Request::has('password')){
                $user->password = bcrypt(Request::get('password'));
            }
            
        });
            
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
