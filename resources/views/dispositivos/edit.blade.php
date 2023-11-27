@extends('adminlte::page')

@section('title', 'Editar-Configuarción')

@section('content_header')
    <h1>Editar Configuración
        <span data-toggle="tooltip" data-placement="right" title="En esta sección se editarán las configuraciones de los dispositivos">
            <i class="fas fa-info-circle ml-2"></i>
        </span>
    </h1>
@section('content')
<form action="{{ route('device.update', $device->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" id="name" name="name" class="form-control" tabindex="1" value="{{ $device->name }}">
    </div>
    <div class="mb-3">
        <label for="ip_address" class="form-label">Dirección IP</label>
        <input type="text" id="ip_address" name="ip_address" class="form-control" tabindex="2" value="{{ $device->ip_address }}">
    </div>
    <div class="mb-3">
        <label for="protocol" class="form-label">Protocolo</label>
        <select id="protocol" name="protocol" class="form-control" tabindex="3">
            <option value="">Seleccionar protocolo</option>
            <option value="mqtt" @if ($device->protocol == 'mqtt') selected @endif>MQTT</option>
            <option value="odc" @if ($device->protocol == 'odc') selected @endif>ODC</option>
            <option value="http" @if ($device->protocol == 'http') selected @endif>HTTP</option>
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
    <script> console.log('Hi!'); </script>
@stop
@stop