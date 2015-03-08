@extends('layouts.master')
@section("title")
Editar Producto
@stop
@section("title page")
Editar Producto
@stop
@section("content")
<div class="table-responsive">
    <form action="/producto/actualizar" method="post">
    <table class="table table-striped">
        <input type="hidden" name="id" value="{{$producto->id}}">
        <tr>
            <td><label for="">Nombre</label></td>
            <td><input type="text" name="nombre" required value="{{$producto->nombre}}"></td>
        </tr>
        <tr>
            <td><label for="">Precio</label></td>
            <td><input type="number" name="precio" required value="{{$producto->precio}}"></td>
        </tr>
        <tr>
            <td><label for="">Categoria</label></td>
            <td> <input type="text" name="categoria" required value="{{$producto->categoria}}"></td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Guardar" class="btn btn-success">
            </td>
            <td>
                <a class="btn btn-info" href="/producto">Cancelar</a>
            </td>
        </tr>
    </table>
    </form>
</div>
@stop