@extends('layouts.app')

@section('template_title')
    {{ $tratamiento->name ?? 'Inspeccionar' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <h4 class="card-title">Inspeccionar tratamiento</h4>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-secondary" href="{{ route('tratamiento.index') }}"><i class="fa-solid fa-chevron-left"></i> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Procedimiento:</strong>
                            {{ $tratamiento->procedimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Costo:</strong>
                            ${{ $tratamiento->costoSugerido }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
