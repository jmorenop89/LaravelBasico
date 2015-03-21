@extends('layouts.master')

@section("title")
Editar Producto
@stop

@section("title page")
Editar Producto
@stop

@section("content")

<div class="col-sm-12">
@if ( $errors->count() > 0 )
<div class="alert alert-danger">
    <p>The following errors have occurred:</p>

    <ul>
    @foreach( $errors->all() as $message )
        <li>{{ $message }}</li>
    @endforeach
    </ul>
</div>
@endif
    <form action="/producto/actualizar" method="post" class="form-horizontal">
        <input type="hidden" name="id" value="{{ $producto->id}}">
        <div class="form-group @if($errors->get('nombre')) {{'has-error'}} @endif ">
            <label class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-9">
                <input type="text" name="nombre" class="form-control" placeholder="ingrese nombre" value="{{ $producto->nombre}}">
            </div>
        </div>
        <div class="form-group @if($errors->get('precio')) {{'has-error'}} @endif ">
            <label class="col-sm-2 control-label">Precio</label>
            <div class="col-sm-9">
                <input type="text" name="precio" class="form-control" placeholder="ingrese precio" value="{{ $producto->precio}}">
            </div>
        </div>
        <div class="form-group @if($errors->get('categoria')) {{'has-error'}} @endif ">
            <label class="col-sm-2 control-label">Categoria</label>
            <div class="col-sm-9">
                <input type="text" name="categoria" class="form-control" placeholder="ingrese categoria" value="{{ $producto->categoria}}">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </div>
    </form>
</div>

@stop