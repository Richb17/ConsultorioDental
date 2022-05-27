@extends('layouts.app')

@section('content')
<div class="container">
    <div class="bg-primary text-white col-8 py-5 d-flex row mx-auto">
        <h1 class="d-flex justify-content-center fw-normal">Registrar tratamiento</h1>
    </div>

    <div class="col-8 py-4 d-flex row mx-auto bg-white">
        <form action="/guardarTratamiento" method="GET">
            @csrf
            <label class="form-label" for="procedimiento">Nombre del procedimiento:</label>
            <input class="form-control" type="text" name="procedimiento" id="procedimiento" autocomplete="off" required>
            <br>
            <br>
            <label class="form-label" for="costoSugerido">Costo Sugerido:</label>
            <input class="form-control" type="number" name="costoSugerido" id="costoSugerido" min="1" autocomplete="off" required>
            <br>
            <div class="d-flex justify-content-end">
                <input class="btn btn-primary " type="submit" value="Registrar">
            </div>
        </form>
    </div>
</div>
@endsection