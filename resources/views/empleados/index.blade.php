@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')

@if (session()->get('success'))
<div class="alert alert-success">
    {{session()->get('success')}}
</div>
@endif

<table class="table table-bordered table-White">
    <thead>
        <tr >
            <th>id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cargo</th>
            <th>Salario</th>
            <th>Fecha de Ingreso</th>
            <th>Fecha de Salida</th>
            <th>Motivo de Salida</th>
        </tr>
    </thead>
    <tbody>
     @foreach ($empelados as $empleado)
        <tr>
            <td> {{$empleado->id}}</td>
            <td> {{$empleado->nombres}}</td>
            <td> {{$empleado->apellidos}}</td>
            <td> {{$empleado->cargo}}</td>
            <td> {{$empleado->salario}}</td>
            <td> {{$empleado->fechaIngreso}}</td>
            <td> {{$empleado->fechaSalida}}</td>
            <td> {{$empleado->motivoSalida}}</td>
            <td>
                <a href="{{route('empleados.edit', $empleado->id)}}" class="btn btn-success btn-sm">Editar</a>
                <form action="{{route('empleados.destroy', $empleado->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop