@extends('layouts.app')

@section('template_title')
    {{ $consulta->name ?? 'Inspeccionar Consulta' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <h4 class="card-title">Inspeccionar Consulta</h4>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-secondary" href="{{ route('consulta.index') }}"><i class="fa-solid fa-chevron-left"></i> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Paciente:</strong>
                            {{ $consulta->paciente->nombre.' '.$consulta->paciente->apellidoP.' '.$consulta->paciente->apellidoM }}
                        </div>
                        <div class="form-group">
                            <strong>Procedimiento:</strong>
                            {{ $consulta->tratamiento->procedimiento  }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $consulta->fechaProgramada }}
                        </div>
                        <div class="form-group">
                            <strong>Hora:</strong>
                            {{ $consulta->start }}
                        </div>
                        <div class="form-group">
                            <strong>Asistencia:</strong>
                            @if($consulta->asistencia == true)
							    {{ $consulta->asistencia }}
                            @else
                                Aun no se realiza la cita
                            @endif
                        </div>
                        <div class="form-group">
                            <strong>Costo:</strong>
                            ${{ $consulta->tratamiento->costoSugerido }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha pago:</strong>
                            @if($consulta->pagoCompleto == true)
							    {{ $consulta->fechaPago }}
                            @else
                                Aun no se realiza el pago
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
