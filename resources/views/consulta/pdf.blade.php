@extends('layouts.app')

@section('template_title')
    Consulta
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <h4 id="card_title">
                                {{ __('Consultas') }}
                            </h4>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>#</th>
                                        
										<th>Paciente</th>
										<th>Procedimiento</th>
										<th>Fecha </th>
										<th>Hora</th>
										<th>Asitió</th>
										<th>Costo</th>
										<th>Fecha pago</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{ $i = 1 }}
                                    @foreach ($consultas as $consulta)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $consulta->paciente->nombre.' '.$consulta->paciente->apellidoP.' '.$consulta->paciente->apellidoM }}</td>
											<td>{{ $consulta->tratamiento->procedimiento }}</td>
											<td>{{ $consulta->fechaProgramada }}</td>
											<td>{{ $consulta->start }}</td>
                                            @if($consulta->asistencia == true)
											    <td>Asistió</td>
                                            @else
                                                <td>Aun no se realiza la cita</td>
                                            @endif
											<td>${{ $consulta->tratamiento->costoSugerido }}</td>
											@if($consulta->pagoCompleto == true)
											    <td>{{ $consulta->fechaPago }}</td>
                                            @else
                                                <td>Aun no se realiza el pago</td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection