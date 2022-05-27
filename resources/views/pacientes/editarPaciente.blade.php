@extends('layouts.app')

@section('content')
<div class="container">
    <div class="bg-primary text-white col-8 py-5 d-flex row mx-auto">
        <h1 class="d-flex justify-content-center fw-normal">Editar Paciente</h1>
    </div>

    <div class="col-8 py-5 d-flex row mx-auto bg-white">
        <form action="/guardarEdicionPaciente" method="GET">
            @csrf
            <input type="hidden" name="id" id="" value="{{$paciente->id}}">
            <label class="form-label" for="nombre">Nombre:</label>
            <input class="form-control" type="text" name="nombre" id="nombre" autocomplete="off" value="{{$paciente->nombre}}">
            <br>
            <br>
            <label class="form-label" for="apellidoP">Apellido Paterno:</label>
            <input class="form-control" type="text" name="apellidoP" id="apellidoP" autocomplete="off" value="{{$paciente->apellidoP}}">
            <br>
            <br>
            <label class="form-label" for="apellidoM">Apellido Materno:</label>
            <input class="form-control" type="text" name="apellidoM" id="apellidoM" autocomplete="off" value="{{$paciente->apellidoM}}">
            <br>
            <br>
            <label class="form-label" for="numTelefono">Número de tel.:</label>
            <input class="form-control" type="tel" name="numTelefono" id="numTelefono" autocomplete="off" value="{{$paciente->numTelefono}}" pattern="[0-9]{3} [0-9]{3} [0-9]{4}" >
            <small>Format: 123 456 7890</small>
            <br>
            <div class="d-flex justify-content-end">
                <input class="btn btn-warning" type="submit" value="Aceptar & Cambiar">
            </div>
        </form>
    </div>
</div>
@endsection
