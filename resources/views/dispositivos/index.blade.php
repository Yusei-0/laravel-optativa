@extends('adminlte::page')

@section('title', 'Repositorio-Configuración')

@section('content_header')
    <h1>Configuración de Dispositivos</h1>
@stop

@section('content')
    <a href="device/create" class="btn btn-primary mb-3">Configurar</a>
    <table id="dispositivos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nombre</th>
                <th scope="col">Dirección IP</th>
                <th scope="col">Protocolo</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($devices as $device)
            <tr>
                <td> {{$device->id}} </td>
                <td> {{$device->name}} </td>
                <td> {{$device->ip_address}} </td>
                <td> {{$device->protocol}} </td>
                <td>
                    <form action="{{route('device.destroy', $device->id)}}" method="POST">
                        <a href="/device/{{$device->id}}/edit" class="btn btn-info">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#dispositivos').DataTable({
                "lengthMenu": [[5,10,50,-1], [5,10,50, "All"]]
            });
        });
    </script>
@stop