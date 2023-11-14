@extends('adminlte::page')

@section('title', 'Repositorio-Archivos')

@section('content_header')
    <h1>Listado de archivos</h1>
@stop

@section('content')
    <a href="archivo/create" class="btn btn-primary mb-3">CREAR</a>

    <table id="archivos" class="table table-striped table-bordered shadow-lg mt-4" style="width: 100%">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Archivo</th>
                <th scope="col">Descripción</th>
                <th scope="col">Tamaño</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($archivos as $archivo)
                <tr>
                    <td> {{$archivo->id}} </td>
                    <td> {{$archivo->archivo}} </td>
                    <td> {{$archivo->descripcion}} </td>
                    <td> {{$archivo->tamaño}} </td>
                    <td>
                        
                        <form action="{{ route('archivo.destroy', $archivo->id) }}" method="POST" >
                            <a href="/archivo/{{ $archivo->id }}/download" class="btn btn-info">Descargar</a>
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
            $('#archivos').DataTable({
                "lengthMenu": [[5,10,50,-1], [5,10,50, "All"]]
            });
        });
    </script>
@stop