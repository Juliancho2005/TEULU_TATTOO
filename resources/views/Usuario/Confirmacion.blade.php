<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
    
    <form action="/adminusuario/{{$resultado->id}}" method="post" class="form-conf">
        <h1>¿Borrar {{$resultado->email}}?</h1>
    <h2>(Esta accion no se puede deshacer)</h2>
    <br>
        @csrf
        @method('delete')
        <input class="btn btn-danger" type="submit" value="eliminar definitivamente">
        <br>
        <br>
    </form>

</body>
</html>