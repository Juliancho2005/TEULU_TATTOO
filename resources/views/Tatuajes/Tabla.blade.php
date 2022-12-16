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
    <body class="btabla">
        
        
        
        <h1 class="title">Tu tatuaje | <a href="tatuajes/create" class="btn-tbl" id="cboton">Crear</a> </h1>
    @foreach($tatuajes as $tatuaje)
    <div class="container">
       
       <div class="card">
                    <img src="{{asset('storage').'/'.$tatuaje->tatu_imagen}}""class="img-tbl">
                          <p>Nombre:</p>
                          <p>{{$tatuaje->tatu_nombre}}</p>
                         <p>descripcion:</p>
                         <p>{{$tatuaje->tatu_descripcion}}</p>
                          <p>Categoria</p>
                          <p>{{$tatuaje->tatu_categoria}}</p>
                          <p>Precio COP:</p>
                          <p>{{$tatuaje->tatu_precio}}</p>
                          <a class="btn-tbl" href="tatuajes/{{$tatuaje->id}}/edit">Modificar</a>
                          <a class="btn-tbl" href="tatuajes/{{$tatuaje->id}}/confirmacion"> Eliminar </a>
                         </div>
                          </div>

                @endforeach
                
            
        
        
  

</body>

</html>