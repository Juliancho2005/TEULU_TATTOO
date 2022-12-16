<div class="content">
        <div class="row">
            <div class="col">
                <h1>Quieres eliminar este campo?</h1>
                <h2>{{$busquedaD->id}}</h2>
            </div>
            <div class="row">
                <div class="content"></div>
                <form action="/agenda/{{$busquedaD->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>