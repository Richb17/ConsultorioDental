@extends('layouts.app')

@section('template_title')
    Tratamiento
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            @if($tratamientos->count() > 0)
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <h4 id="card_title">
                                {{ __('Tratamiento') }}
                            </h4>

                             <div class="float-right">
                                <a href="{{ route('tratamiento.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo Tratamiento') }}
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
                                        
										<th>Procedimiento</th>
										<th>Costo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tratamientos as $tratamiento)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tratamiento->procedimiento }}</td>
											<td>${{ $tratamiento->costoSugerido }}</td>

                                            <td>
                                                <form action="{{ route('tratamiento.destroy',$tratamiento->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tratamiento.show',$tratamiento->id) }}"><i class="fa fa-fw fa-eye"></i> Inspeccionar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tratamiento.edit',$tratamiento->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tratamientos->links() !!}
            </div>
            @else
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Ups! no hay ningun tratamiento.</h5>
                        <p class="card-text">Tal vez deberias crear uno.</p>
                        <a href="{{ route('tratamiento.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                            {{ __('Crear Nuevo Tratamiento') }}
                          </a>
                    </div>
                </div>
             @endif
        </div>
    </div>
@endsection
