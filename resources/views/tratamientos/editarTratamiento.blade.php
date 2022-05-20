@extends('layouts.app')

@section('content')
<div class="container">
    <div class="bg-primary text-white col-8 py-5 d-flex row mx-auto">
        <h1 class="d-flex justify-content-center fw-normal">Editar Tratamiento</h1>
    </div>

    <div class="col-8 py-5 d-flex row mx-auto bg-white">
        <form action="/guardarEdicionTratamiento" method="GET">
            @csrf
            <input type="hidden" name="id" id="" value="{{$tratamiento->id}}">
            <label class="form-label" for="procedimiento">Nombre del tratamiento:</label>
            <input class="form-control" type="text" name="procedimiento" id="procedimiento" autocomplete="off" value="{{$tratamiento->procedimiento}}">
            <br>
            <br>
            <label class="form-label" for="costoSugerido">Costo Sugerido:</label>
            <input class="form-control" type="number" min="1" name="costoSugerido" id="costoSugerido" autocomplete="off" value="{{$tratamiento->costoSugerido}}">
            <br>
            <div class="d-flex justify-content-end">
                <input class="btn btn-warning" type="submit" value="Aceptar & Cambiar">
            </div>
        </form>
    </div>
</div>
@endsection
