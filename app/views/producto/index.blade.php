@extends('layouts.master')
@section("title")
Lista de Productos
@stop
@section("title page")
Lista de Productos
@stop
@section("content")
<a href="/producto/registrar" class="btn btn-info">NUEVO</a>
<br><br>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Categoria</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        	@foreach($productos as $producto)
            <tr>
                <td>{{$producto->id}}</td>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->precio}}</td>
                <td>{{$producto->categoria}}</td>
                <td>
                	<a href="/producto/editar/{{$producto->id}}">Editar</a>
                    <a href="/producto/eliminar/{{$producto->id}}">Elminar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop