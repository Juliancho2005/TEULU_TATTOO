@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Crea Un Nuevo Tatuaje</h1>
    <section class="login-section">
        <div class="login-containerc">
    <form action="/tatuajes" method="post" enctype="multipart/form-data" class="form-login">
        @csrf
        <label for="nombre">
            <span>Ingresa el nombre de tatuaje</span>
            <input type="text" name="tatu_nombre" id="nombre">
        </label><br>

        <label for="descripcion">
            <span>Ingresa La descripcion del tatuaje</span>
            <input type="text" name="tatu_descripcion" id="descripcion">
        </label><br>

        <label for="categoria">
            <span>Ingresa categoria del tatuaje</span>
            <input type="text" name="tatu_categoria" id="categoria">
        </label><br>

        <label for="precio">
            <span>Ingresa el precio</span>
            <input type="number" name=" tatu_precio" id="precio">
        </label><br>
        <label for="imagen">
            <span>Ingresa una foto del tatuaje</span>
            <input type="file" name="tatu_imagen" id="imagen" accept="image/*">
        </label>
        <br>

        <input type="submit" value="Enviar" class="btn btn-secondary">
    </form>
   </div>
</section>
</body>

</html>