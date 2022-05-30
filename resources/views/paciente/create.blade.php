@extends('layouts.app')

@section('template_title')
    Registrar nuevo paciente
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-3">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <h4 class="card-title">Registrar nuevo paciente</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('paciente.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('paciente.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
