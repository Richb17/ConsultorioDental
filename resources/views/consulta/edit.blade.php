@extends('layouts.app')

@section('template_title')
    Actualizar Consulta
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-3">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <h4 class="card-title">Actualizar Consulta</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('consulta.update', $consulta->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('consulta.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
