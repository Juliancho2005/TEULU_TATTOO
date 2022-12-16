
<div class="content">
    <div class="row">
        <div class="col">
        <h1>CITAS</h1>
        <a class="btn btn-primary" href="agenda/create">Crear</a>
        <table class="table table-sm">
            <tr>
                <th class='col'> Id</th>
                <th class='col'> quien solicitó</th>
                <th class='col'> fecha</th>
            </tr>
            @foreach($citas as $cita)
            <tr>
                <td>{{$cita->id_cita}}</td>
                <td>{{$cita->id_solicitante}}</td>
                <td>{{$cita->fecha}}</td>
                <td><a class="btn btn-primary" href="agenda/{{$cita->id}}/edit">Reagendar</a></td>
                <td><a class="btn btn-primary" href="agenda/{{$cita->id}}/confirmDelete">Eliminar</a></td>
            </tr>
            @endforeach
        </table>
</div>
    </div>
</div>