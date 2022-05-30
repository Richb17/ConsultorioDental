<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('procedimiento') }}
            {{ Form::text('procedimiento', $tratamiento->procedimiento, ['class' => 'form-control' . ($errors->has('procedimiento') ? ' is-invalid' : ''), 'placeholder' => 'Procedimiento']) }}
            {!! $errors->first('procedimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Costo') }}
            {{ Form::number('costoSugerido', $tratamiento->costoSugerido, ['class' => 'form-control' . ($errors->has('costoSugerido') ? ' is-invalid' : ''), 'placeholder' => 'Costo $$$']) }}
            {!! $errors->first('costoSugerido', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Registrar</button>
        <button type="reset" class="btn btn-danger">Cancelar</button>
        <a class="btn btn-secondary" href="{{ route('tratamiento.index') }}"> <i class="fa-solid fa-chevron-left"></i> Regresar</a>
    </div>
</div>