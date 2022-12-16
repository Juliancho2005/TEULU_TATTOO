@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card form-login edit-log">
            <div class="card-header">Crea un nuevo tatuaje</div>
                <div class="card-body login-container">
                    <form method="POST" action="/tatuajes" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Nombre</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="tatu_nombre" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Descripcion</label>
                            <div class="col-md-6">
                                <input id="categoria" type="text" class="form-control" name="tatu_descripcion" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Categoria</label>
                            <div class="col-md-6">
                                <input id="categoria" type="text" class="form-control" name="tatu_categoria" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Precio</label>
                            <div class="col-md-6">
                                <input id="precio" type="number" class="form-control" name="tatu_precio" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">imagen</label>
                            <div class="col-md-6">
                                <input class="form-control" type="file" name="tatu_imagen" id="imagen" accept="image/*" autofocus>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary send">
                                    Enviar
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