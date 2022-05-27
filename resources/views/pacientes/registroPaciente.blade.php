@extends('layouts.app')

@section('content')
<div class="container">
    <div class="bg-primary text-white col-8 py-5 d-flex row mx-auto">
        <h1 class="d-flex justify-content-center fw-normal">Registrar paciente</h1>
    </div>

    <div class="col-8 py-4 d-flex row mx-auto bg-white">
        <form action="/guardarPaciente" method="GET">
            @csrf
            <label class="form-label" for="Nombre">Nombre:</label>
            <input class="form-control" type="text" name="nombre" id="nombre" autocomplete="off" required>
            <br>
            <br>
            <label class="form-label" for="apellidoP">Apellido Paterno:</label>
            <input class="form-control" type="text" name="apellidoP" id="apellidoP" autocomplete="off" required>
            <br>
            <br>
            <label class="form-label" for="apellidoM">Apellido Materno:</label>
            <input class="form-control" type="text" name="apellidoM" id="apellidoM" autocomplete="off" required>
            <br>
            <br>
            <label class="form-label" for="numTelefono">Número de tel.:</label>
            <input class="form-control" type="tel" name="numTelefono" id="numTelefono" autocomplete="off" pattern="[0-9]{3} [0-9]{3} [0-9]{4}" >
            <small>Format: 123 456 7890</small><br>
            <br>
            <div class="d-flex justify-content-end">
                <input class="btn btn-primary " type="submit" value="Registrar">
            </div>
        </form>
    </div>
</div>
@endsection