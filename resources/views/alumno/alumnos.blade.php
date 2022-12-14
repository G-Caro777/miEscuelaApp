@extends('master')

@section('contenido')
    <h1>Listado de alumnos</h1><hr>
    <table class="table table:hover">
        <thead>
            <th>ID</th>
            <th>No. Control</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Sexo</th>
            <th>Fecha de nacimiento</th>
            <th>Domicilio</th>
            <th>Telefono</th>
        </thead>
        <tbody>
            @foreach ($alumnos as $a)
            <tr>
                <td>{{ $a -> id}}</td>
                <td>{{ $a -> n_control}}</td>
                <td>{{ $a -> nombre}}</td>
                <td>{{ $a -> edad}}</td>
                <td>{{ $a -> sexo}}</td>
                <td>{{ $a -> fecha_nacimiento}}</td>
                <td>{{ $a -> domicilio}}</td>
                <td>{{ $a -> telefono}}</td>
                <td>
                    <a href="" class="btn btn-primary btn sm">Editar</a>
                    <a href="" class="btn btn-danger btn sm">Eliminar</a>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
@stop