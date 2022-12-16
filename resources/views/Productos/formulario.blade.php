@can('CrearTatu')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido a la creacion de publicaciones</h1>
<form action="/productos">
    @csrf
    <label for="nombre">
        <span>Ingresa el nombre que va a tener el tatuaje </span>
    <input type="text" name="nombre" id="nombre">
    </label>
    <label for="descripcion">
        <span>Ingresa una descripcion del tatuaje </span>
    <input type="text" name="descripcion" id="descripcion">
    </label>
    <label for="categoria">
        <span>Ingresa las categorias que va a tener el tatuaje </span>
    <input type="Blocktext" name="cat" id="cat">
    </label>
    <label for="precio">
        <span>Ingresa el nombre que va a tener el tatuaje </span>
    <input type="number" name="precio" id="precio">
    </label>
    
</form>
</body>
</html>
@else
<h1></h1>
@endcan