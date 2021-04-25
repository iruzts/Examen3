@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
@stop

@section('content')
<div class="card card-secondary ">
    <div class="card-header">
        <h1 class="card-title">Registrar Empleado</h1>
    </div>
    <br>
    <form method="post" action="{{route('empleados.update', $empleados->id)}}">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-8">
                    <label for="txtNombre" class="visually-hidden">Nombres</label>
                    <input type="text" class="form-control" name="nombres" value="{{$empleados->nombres}}">
                </div>
                <div class="col col-lg-2">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-8">
                    <label for="txtNombre" class="visually-hidden">Apellidos</label>
                    <input type="text" class="form-control" name="apellidos" value="{{$empleados->apellidos}}">
                </div>
                <div class="col col-lg-2">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-8">
                    <label for="txtNombre" class="visually-hidden">Cargo</label>
                    <input type="text" class="form-control" name="cargo" value="{{$empleados->cargo}}">
                </div>
                <div class="col col-lg-2">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-8">
                    <label for="txtNombre" class="visually-hidden">Salario</label>
                    <input type="number" class="form-control" name="salario" value="{{$empleados->salario}}">
                </div>
                <div class="col col-lg-2">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-8">
                    <label for="txtNombre" class="visually-hidden">Fecha Ingreso</label>
                    <input type="date" class="form-control" name="fechaIngreso" value="{{$empleados->fechaIngreso}}">
                </div>
                <div class="col col-lg-2">
                </div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-8">
                    <label for="txtNombre" class="visually-hidden">Fecha Salida</label>
                    <input type="date" class="form-control" name="fechaSalida" value="{{$empleados->fechaSalida}}">
                </div>
                <div class="col col-lg-2">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-8">
                    <label for="txtNombre" class="visually-hidden">Motivo de Salida:</label>
                    <textarea type="text" class="form-control" rows="3" name="motivoSalida">{{$empleados->motivoSalida}}</textarea>
                </div>
                <div class="col col-lg-2">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-8">
                    <button type="submit" class="btn btn-outline-success btn-block">Guardar</button>
                </div>
                <div class="col col-lg-2">
                </div>
            </div>
        </div>
    </form>
</div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop