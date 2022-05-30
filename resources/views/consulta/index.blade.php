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
                                {{ __('Consulta') }}
                            </h4>

                             <div class="float-right">
                                <a href="{{ route('consulta.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nueva cita') }}
                                </a>
                                <a href="{{ route('download-pdf') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                    {{ __('Descargar un PDF') }}
                                  </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

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
                                    
                                    @foreach ($consultas as $consulta)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $consulta->paciente->nombre.' '.$consulta->paciente->apellidoP.' '.$consulta->paciente->apellidoM }}</td>
											<td>{{ $consulta->tratamiento->procedimiento }}</td>
											<td>{{ $consulta->fechaProgramada }}</td>
											<td>{{ $consulta->horarioProgramado }}</td>
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

                                            <td>
                                                <form action="{{ route('consulta.destroy',$consulta->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('consulta.show',$consulta->id) }}"><i class="fa fa-fw fa-eye"></i> Inspeccionar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('consulta.edit',$consulta->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $consultas->links() !!}
            </div>
        </div>
    </div>
@endsection
