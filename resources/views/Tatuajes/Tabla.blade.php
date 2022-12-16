@extends('layouts.app')
@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card form-login">
            <div class="card-header">Tu tatuaje || <strong> <a href="tatuajes/create" class="btn-tbl" id="cboton">Crear</a> </strong> </div>
            
                <div class="card-body login-container">
                @foreach($tatuajes as $tatuaje)        
                    <img class="form-control"  src="{{asset('storage').'/'.$tatuaje->tatu_imagen}}" >
                    <p class="form-control" >Nombre:</p>
                    <p class="form-control" >{{$tatuaje->tatu_nombre}}</p>
                    <p class="form-control" >descripcion:</p>
                    <p class="form-control" >{{$tatuaje->tatu_descripcion}}</p>
                    <p class="form-control" >Categoria</p>
                    <p class="form-control" >{{$tatuaje->tatu_categoria}}</p>
                    <p class="form-control" >Precio COP:</p>
                    <p class="form-control" >{{$tatuaje->tatu_precio}}</p>
                    <a class="form-control"  class="btn-tbl" href="tatuajes/{{$tatuaje->id}}/edit">Modificar</a>
                    <a class="form-control"  class="btn-tbl" href="tatuajes/{{$tatuaje->id}}/confirmacion"> Eliminar </a>
                @endforeach
                </div>
           

            </div>
        </div>
    </div>
</div>
                
            
        
        
  


@endsection