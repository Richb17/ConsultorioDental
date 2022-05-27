@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-8 mx-auto bg-white py-2 px-3 my-2 d-flex row justify-content-center align-items-center">
        @foreach($Pacientes as $Paciente)
        <p class="fw-bold border rounded p-2 my-1">Nombre: {{$Paciente->nombre}} {{$Paciente->apellidoP}} {{$Paciente->apellidoM}} | Telefono: {{$Paciente->numTelefono}} <a class="btn btn-danger mx-3" href="/eliminarPaciente/{{$Paciente->id}}">Eliminar</a> <a class="btn btn-success me-3" href="/editarPaciente/{{$Paciente->id}}">Editar</a></p> 
        @endforeach
    </div>
</div>
@endsection