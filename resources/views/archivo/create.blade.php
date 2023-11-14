<!-- resources/views/archivo/create.blade.php -->

@extends('adminlte::page')

@section('title', 'Proyecto con Laravel 8')

@section('content_header')
    <h1>Subir Archivo</h1>
@stop

@section('content')
    <form action="{{ route('archivo.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="archivo" class="form-label">Archivo</label>
            <input type="file" name="archivo" class="form-control" tabindex="1" id="archivo" required>
        </div>
        <div class="mb-3">
            <label for="descripcion">Descripcion</label>
            <input type="text" id="descripcion" name="descripcion" class="form-control" tabindex="2" required>
        </div>
        <div class="mb-3">
            <label for="tamaño">Tamaño</label>
            <input type="number" name="tamaño" class="form-control" id="tamaño" tabindex="3" required>
        </div>
        <a href="{{ route('archivo.index') }}" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
