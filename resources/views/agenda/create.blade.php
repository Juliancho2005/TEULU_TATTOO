
<div class ="content">
    <div class ="row">
        <div class ="col">
            <h1>CREAR</h1>
        </div>
    </div>
</div>

<div class="row">
    <div class ="col">
        <form action="/agenda" method="post">
            @csrf
            <div class ="form-group">
                <label for="Usuario"></label>
                <input type="number" name="idu" id="idu" class ="form-control" placeholder="permitame sus datos personales">
                <br><br>
                <label for="Descripción"></label>
                <input type="datetime-local" name="fecha" id="fecha" class="form-control" placeholder="y cuando su casa esta sola">
            </div>
            <br>
            <button class="btn btn-success" type="submit">crear</button>
        </form>
    </div>
</div>
