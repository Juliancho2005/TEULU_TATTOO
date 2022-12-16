<div class ="content">
    <div class ="row">
        <div class ="col">
            <h1>Reprograme cita</h1>
        </div>
    </div>
</div>

<div class="row">
    <div class ="col">
        <form action="/agenda/{{$SearchC->id}}" method="post">
            @csrf
            @method('put')
            <div class ="form-group">
                <label for="reprogramar"></label>
                <input type="datetime-local" name="fecha" id="fecha" class ="form-control" value="{{$SearchC->fecha}}" placeholder="¿Para cuando quiere reagendar la cita?">
            </div>
            <br>
            <button class="btn btn-success" type="submit">Reprogramar</button>
        </form>
    </div>
</div>