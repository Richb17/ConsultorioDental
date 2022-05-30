@extends('layouts.app')

@section('template_title')
    Paciente
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            @if($pacientes->count() > 0)
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <h4 id="card_title">
                                {{ __('Paciente') }}
                            </h4>

                             <div class="float-right">
                                <a href="{{ route('paciente.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Registrar Nuevo Paciente') }}
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
                                        
										<th>Nombre</th>
										<th>Apellido Paterno</th>
										<th>Apellido Materno</th>
										<th>Número de tel.</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pacientes as $paciente)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $paciente->nombre }}</td>
											<td>{{ $paciente->apellidoP }}</td>
											<td>{{ $paciente->apellidoM }}</td>
											@if($paciente->numTelefono==NULL)
                                                <td>No se registro número de tel.</td>
                                            @else
                                                <td>{{ $paciente->numTelefono }}</td>
                                            @endif

                                            <td>
                                                <form action="{{ route('paciente.destroy',$paciente->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('paciente.show',$paciente->id) }}"><i class="fa fa-fw fa-eye"></i> Inspeccionar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('paciente.edit',$paciente->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $pacientes->links() !!}
            </div>
            @else
                <div class="card col-auto" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Ups! no hay ningun paciente registrado.</h5>
                        <p class="card-text">Tal vez deberias registrar uno.</p>
                        <a href="{{ route('paciente.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                            {{ __('Registrar Nuevo Paciente') }}
                          </a>
                    </div>
                </div>
             @endif
        </div>
    </div>
@endsection
