@extends('layouts.app')

@section('template_title')
    {{ $consulta->name ?? 'Exportar CSV' }}
@endsection

@section('content')
<div class="container mt-5">
 
   
    @if(session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
    @endif
   
    <div class="card">
   
      <div class="card-header font-weight-bold">
        <h2 class="float-left">Exportar tabla tratamientos</h2>
      </div>
   
      <div class="card-body">
        <a href="{{url('export-excel-csv-file/xlsx')}}" class="btn btn-success mr-1">Exportar a Excel</a>
        <a href="{{url('export-excel-csv-file/csv')}}" class="btn btn-success">Exportar a CSV</a>
      </div>
   
    </div>
   
  </div>  
@endsection