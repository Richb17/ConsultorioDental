@extends('layouts.app')

@section('template_title')
    Editar Tratamiento
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-3">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <h4 class="card-title">Editar Tratamiento</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tratamiento.update', $tratamiento->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('tratamiento.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
