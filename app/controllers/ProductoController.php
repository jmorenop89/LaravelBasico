<?php

class ProductoController extends BaseController {

	
	public function getIndex()
	{
		$productos = Producto::all();	
		return View::make('producto.index')->with('productos',$productos);
	}

	public function getRegistrar()
	{
		return View::make('producto.new');
	}

	public function postGuardar()
	{
		$producto = new Producto;
		$producto->nombre = Input::get('nombre');
		$producto->precio = Input::get('precio');
		$producto->categoria = Input::get('categoria');
		$producto->save();
		return Redirect::to('producto');
	}

	public function getEditar($id)
	{
		$producto = Producto::find($id);
		return View::make('producto.edit')->with('producto',$producto);
	}

	public function postActualizar()
	{
		$id = Input::get('id');
		$producto = Producto::find($id);
		$producto->nombre = Input::get('nombre');
		$producto->precio = Input::get('precio');
		$producto->categoria = Input::get('categoria');
		$producto->save();
		return Redirect::to('producto');
	}

	public function getEliminar($id)
	{
		$producto = Producto::find($id);
		$producto->delete();
		return Redirect::to('producto');
	}

}
