@extends('layouts.app')
@section('content')

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card form-login">
                <div class="card-header">Edita tu tatuaje : "{{$busquedaview->tatu_nombre}}"</div>

                <div class="card-body login-container">
                    <form  method="POST" action="/tatuajes/{{$busquedaview->id}}" enctype="multipart/form-data">
                        @csrf
                        @method('patch')

                        <div class="row mb-3">
                            <label for="nombre" class="col-md-4 col-form-label text-md-end">Nombre</label>

                            <div class="col-md-6">
                                <input id="nombre" class="form-control" name="tatu_nombre" value="{{$busquedaview->tatu_nombre}}" required autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nombre" class="col-md-4 col-form-label text-md-end">Descripcion</label>

                            <div class="col-md-6">
                                <input id="nombre"  class="form-control" name="tatu_descripcion" value="{{$busquedaview->tatu_descripcion}}" required autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nombre" class="col-md-4 col-form-label text-md-end">Categoria</label>

                            <div class="col-md-6">
                                <input id="nombre" class="form-control" name="tatu_categoria" value="{{$busquedaview->tatu_categoria}}" required autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nombre" class="col-md-4 col-form-label text-md-end">Precio</label>

                            <div class="col-md-6">
                                <input id="nombre" class="form-control" name="tatu_precio" value="{{$busquedaview->tatu_precio}}" required autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nombre" class="col-md-4 col-form-label text-md-end">Tatuaje</label>
                            <div class="col-md-6">
                                <input class="form-control" type="file" name="tatu_imagen" id="imagen" accept="image/*" value="" required autofocus>
                            </div>
                            
                        </div> 
                        <br>
                        <div class="row mb-3">
                            <img src="{{asset('storage').'/'.$busquedaview->tatu_imagen}}" width="250" alt="">
                        </div>

                        
                        <div class="row mb-0 login-forgot">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary send">
                                    Editar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection