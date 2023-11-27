@extends('adminlte::page')

@section('title', 'Configuración')

@section('content_header')
    <h1>Configuración
        <span data-toggle="tooltip" data-placement="right" title="En esta sección se configurarán los dispositivos">
            <i class="fas fa-info-circle ml-2"></i>
        </span>
    </h1>
@stop

@section('content')
<form method="POST" action="{{ route('device.store') }}">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" id="name" name="name" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="ip_address" class="form-label">Dirección IP</label>
        <input type="text" id="ip_address" name="ip_address" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="protocol" class="form-label">Protocolo</label>
        <select id="protocol" name="protocol" class="form-control" tabindex="3">
            <option value="">Seleccionar protocolo</option>
            <option value="mqtt">MQTT</option>
            <option value="odc">ODC</option>
            <option value="http">HTTP</option>
            <!-- Agrega más opciones según tus necesidades -->
        </select>
    </div>
    
    <a href="/device" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop