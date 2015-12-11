<?php

Admin::model(\App\Noticia::class)->title('Noticias')->with()->filters(function ()
{

})->columns(function ()
{
	Column::string('titulo', 'Titulo');
	Column::string('habilitado', 'Habilitado');
	Column::string('orden', 'Orden');
})->form(function ()
{
	FormItem::text('titulo', 'Titulo');
	FormItem::textarea('bajada', 'Bajada');
	FormItem::ckeditor('texto', 'Texto');
	FormItem::checkbox('habilitado', 'Habilitado');
	FormItem::select('orden', 'Orden')->enum([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15])->nullable();
	FormItem::CustomImagenNoticia();
});