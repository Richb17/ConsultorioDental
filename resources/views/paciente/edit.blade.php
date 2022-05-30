@extends('layouts.app')

@section('template_title')
    Update Paciente
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-3">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <h4 class="card-title">Editar Paciente</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('paciente.update', $paciente->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('paciente.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
