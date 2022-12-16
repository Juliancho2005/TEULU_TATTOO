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
    <h1>Edita el tatuaje "{{$busquedaview->tatu_nombre}}"</h1>
    <section class="login-section">
        <div class="login-containerc">
    <form action="/tatuajes/{{$busquedaview->id}}" method="post" enctype="multipart/form-data" class="form-login">
        @csrf
        @method('patch')
        <label for="nombre">
            <span>Nombre de tatuaje</span>
            <input type="text" name="tatu_nombre" id="nombre" value="{{$busquedaview->tatu_nombre}}">
        </label><br>

        <label for="descripcion">
            <span>Descripcion del tatuaje</span>
            <input type="text" name="tatu_descripcion" id="descripcion" value="{{$busquedaview->tatu_descripcion}}">
        </label><br>

        <label for="categoria">
            <span>Categoria del tatuaje</span>
            <input type="text" name="tatu_categoria" id="categoria" value="{{$busquedaview->tatu_categoria}}">
        </label><br>

        <label for="precio">
            <span>Precio</span>
            <input type="number" name="tatu_precio" id="precio" value="{{$busquedaview->tatu_precio}}">
        </label><br>
        <label for="imagen">
            <h6><span>Foto del tatuaje</span></h6>
            
            <img src="{{asset('storage').'/'.$busquedaview->tatu_imagen}}" width="250" alt="">
            <br>
            <br>
            <input type="file" name="tatu_imagen" id="imagen" accept="image/*" value="">
            <br>
            <br>
        </label>
        

        <input type="submit" value="Enviar" class="btn-bd-primary ">
        </div>
    </section>
    </form>
</body>

</html>