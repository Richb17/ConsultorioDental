@extends('layouts.app')

@section('template_title')
    {{ $paciente->name ?? 'Show Paciente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <h4 class="card-title">Ver Paciente</h4>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-secondary" href="{{ route('paciente.index') }}"> <i class="fa-solid fa-chevron-left"></i> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $paciente->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Paterno:</strong>
                            {{ $paciente->apellidoP }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Materno:</strong>
                            {{ $paciente->apellidoM }}
                        </div>
                        <div class="form-group">
                            <strong>Numtelefono:</strong>
                            @if($paciente->numTelefono==NULL)
                                No se registro número de tel.
                            @else
                                {{ $paciente->numTelefono }}
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
