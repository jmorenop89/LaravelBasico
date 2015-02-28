<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});


//Route::get('producto','ProductoController@ListarProducto');

Route::controller('producto','ProductoController');

Route::get('creartabla',function()
{
	Schema::create('producto',function($table)
	{
		$table->increments('id');
		$table->string('nombre');
		$table->decimal('precio', 8, 2);
	});
	echo "Tabla producto creada satisfactoriamente";
});
