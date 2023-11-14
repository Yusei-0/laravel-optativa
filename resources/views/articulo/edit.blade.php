@extends('adminlte::page')

@section('title', 'Proyecto con Laravel 8')

@section('content_header')
    <h1>Editar Artículo</h1>
@stop

@section('content')
<form action="/articulos/{{$articulo->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Código</label>
        <input type="text" id="codigo" name="codigo" class="form-control" value="{{$articulo->codigo}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descripción</label>
        <input type="text" id="descripcion" name="descripcion" class="form-control"  value="{{$articulo->descripcion}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Cantidad</label>
        <input type="number" id="cantidad" name="cantidad" class="form-control" value="{{$articulo->cantidad}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input type="number" id="precio" name="precio" step="any"  class="form-control"  value="{{$articulo->precio}}">
    </div>
    <a href="/artiulos" class="btn btn-secondary" >Cancelar</a>
    <button type="submit" class="btn btn-primary" >Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop