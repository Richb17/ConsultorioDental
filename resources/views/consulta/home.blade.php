@extends('layouts.app')

@section('template_title')
    {{ $consulta->name ?? 'Calendario' }}
@endsection

@section('content')
@guest 
    
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
                            <form method="POST" action="{{ route('consulta.store') }}"  role="form" enctype="multipart/form-data">
                                @csrf
                                <label class="form-label" for="Pacientes">Pacientes:</label>
                                <select class="form-select" name="paciente_id" id="paciente" aria-label="Default select example">
                                    <option selected>Seleccione un paciente</option>
                                    @foreach ($pacientes as $paciente)
                                        <option value={{ $paciente->id }}> {{$paciente->nombre}} {{$paciente->apellidoP}} {{$paciente->apellidoM}} </option>
                                    @endforeach
                                </select>
                                <br>
                                <label class="form-label" for="Tratamientos">Tratamientos:</label>
                                <select class="form-select" name="procedimiento_id" id="tratamiento" aria-label="Default select example">
                                    <option selected>Seleccione un tratamiento</option>
                                    @foreach ($tratamientos as $tratamiento)
                                        <option value={{ $tratamiento->id }}> {{$tratamiento->procedimiento}} </option>
                                    @endforeach
                                </select>
                                <br>
                                
                                <label for="hora">Hora inicio :</label>
                                <input type="time" id="hora" name="start" required>   
                                <label for="hora">Hora Fin :</label>
                                <input type="time" id="hora" name="end" required>   
                                <br><br>

                                <div class="row">
                                    <script>
                                        function getCheckboxStatus(var name){
                                           var status = document.getElementById(name).checked;
                                           if (status) {
                                                document.getElementById(name).value = "1";
                                           } else {
                                                document.getElementById(name).value = "0"
                                           }
                                        }
                                    </script>
                                    <div class="form-group col-auto" style = "width:10em">
                                        <label class="form-label" for="asistencia">Asistencia</label>
                                        <input type="checkbox" id="asistencia" name="asistencia" value="1" onchange="getCheckboStatus('asistencia')">
                                    </div>
                                    <div class="form-group col-auto" style = "width:10em">
                                        <label class="form-label" for="pago">Pago</label>
                                        <input type="checkbox" id="pagoCompleto" name="pagoCompleto" value="1" onchange="getCheckboStatus('pagoCompleto')">
                                    </div>
                                </div>
                                <input id="fecha" class="form-control" name="fechaProgramada" type="hidden" >
                                
                                <div class="d-flex justify-content-end">
                                    <input class="btn btn-primary " id="guardarEvento" type="submit" value="Registrar Cita">
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
        <div class="col-md-2">
            <!-- Modal -->
            <div class="modal fade" id="evento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog        ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="title"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p id="startHour"></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endguest

@endsection
