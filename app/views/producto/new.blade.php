@extends('layouts.master')
@section("title")
Registrar Producto
@stop
@section("title page")
Registrar Producto
@stop
@section("content")
<div class="table-responsive">
    <form action="guardar" method="post">
    <table class="table table-striped">
        <tr>
            <td><label for="">Nombre</label></td>
            <td><input type="text" name="nombre" required></td>
        </tr>
        <tr>
            <td><label for="">Precio</label></td>
            <td><input type="number" name="precio" required></td>
        </tr>
        <tr>
            <td><label for="">Categoria</label></td>
            <td> <input type="text" name="categoria" required></td>
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