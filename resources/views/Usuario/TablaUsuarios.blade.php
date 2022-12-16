@extends('layouts.app')
@section('contenido')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Registro y control de usuarios</h1>
    <table class="table table-striped table-hover">
        <tr>
            <th>Id</th>
            <th>Email del usuario</th>
            <th>Nombre del usuario</th>
            <th>Telefono del usuario</th>
            <th>Contraseña del usuario</th>
            <th>Edita la informacion de un usuario</th>
            <th>Elimina un usuario</th>
        </tr>
        @foreach($usuarios as $usuario)
        <tr>
            <td> {{$usuario->id}}</td>
            <td>{{$usuario->email}}</td>
            <td> {{$usuario->nombre}}</td>
            <td> {{$usuario->telefono}}</td>
            <td> {{$usuario->contraseña}}</td>
            <td><a class="btn-tbl" href="adminusuario/{{$usuario->id}}/edit"> modifica un usuario</a></td>
            <td><a class="btn-tbl" href="adminusuario/{{$usuario->id}}/confirmacion"> elimina un usuario</a></td>
        </tr>
        @endforeach
    </table>
    <a href="adminusuario/create" class="btn-tbl"> crea un nuevo usuario</a>
</body>

</html>