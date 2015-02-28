<?php

	class ProductoController extends BaseController
	{
		public function getIndex()
		{
			return View::make('producto.index');
		}

		public function getCreate()
		{
			return View::make('producto.create');
		} 
	}