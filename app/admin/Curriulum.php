<?php

Admin::model(\App\Curriculum::class)->title('Curriculum')->with()->filters(function ()
{

})->columns(function ()
{
	Column::string('apellido', 'Apellido');
	Column::string('nombre', 'Nombre');
	Column::string('puesto', 'Puesto');
	Column::string('edad', 'Edad');
	Column::string('email', 'e-mail');
	Column::date('created_at', 'Ingreso');
	
})->form(function ()
{
	FormItem::text('nombre', 'nombre');
	FormItem::text('apellido', 'apellido');
	FormItem::text('dni', 'dni');
	FormItem::text('fecha_nacimiento', 'fecha_nacimiento');
	FormItem::text('puesto', 'puesto');
	FormItem::text('domicilio', 'domicilio');
	FormItem::text('localidad', 'localidad');
	FormItem::text('provincia', 'provincia');
	FormItem::text('telefono', 'telefono');
	FormItem::text('email', 'email');
	FormItem::text('linkedin', 'linkedin');
	FormItem::CustomCV();
	
});