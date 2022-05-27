@extends('layouts.app')

@section('content')
@guest
    return view('auth.login')
@else 
<div class="container">
    <div class="row justify-content-center">
        <div id="calendar"></div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-2">
            <!-- Modal -->
            <div class="modal fade" id="consulta" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Registrar Cita</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/guardarConsulta" method="GET">
                                <label class="form-label" for="Pacientes">Pacientes:</label>
                                <select class="form-select" name="Pacientes" id="paciente" aria-label="Default select example">
                                    <option selected>Seleccione un paciente</option>
                                    @foreach ($Pacientes as $paciente)
                                        <option value={{ $paciente->id }}> {{$paciente->nombre}} {{$paciente->apellidoP}} {{$paciente->apellidoM}} </option>
                                    @endforeach
                                </select>
                                <br>
                                <label class="form-label" for="Tratamientos">Tratamientos:</label>
                                <select class="form-select" name="Tratamientos" id="tratamiento" aria-label="Default select example">
                                    <option selected>Seleccione un tratamiento</option>
                                    @foreach ($Tratamientos as $tratamiento)
                                        <option value={{ $tratamiento->id }}> {{$tratamiento->procedimiento}} </option>
                                    @endforeach
                                </select>
                                <br>
                                <br>
                                
                                <label for="appt">Seleccione una hora :</label>
                                <input type="time" id="hora" name="appt" required>   

                                <div class="d-flex justify-content-end">
                                    <input class="btn btn-primary " type="submit" value="Registrar Cita">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endguest

@endsection
