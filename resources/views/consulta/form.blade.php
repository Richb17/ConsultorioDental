<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <label class="form-label" for="Pacientes">Paciente</label>
            <select class="form-select" name="paciente_id" id="paciente" placeholder="Seleccione un paciente">
                @foreach ($pacientes as $paciente)
                    <option value={{ $paciente->id }}> {{$paciente->nombre}} {{$paciente->apellidoP}} {{$paciente->apellidoM}} </option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="form-group">
            <label class="form-label" for="Tratamientos">Motivo de la cita</label>
            <select class="form-select" name="procedimiento_id" id="tratamiento" placeholder="Seleccione el motivo de la cita" >
                @foreach ($tratamientos as $tratamiento)
                    <option value={{ $tratamiento->id }}> {{$tratamiento->procedimiento}} </option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="row">
            <div class="form-group col-auto" style = "width:15em">
                {{ Form::label('Fecha') }}
                {{ Form::date('fechaProgramada', $consulta->fechaProgramada, ['class' => 'form-control' . ($errors->has('fechaProgramada') ? ' is-invalid' : '')]) }}
                {!! $errors->first('fechaProgramada', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group col-auto" style = "width:15em">
                {{ Form::label('Hora') }}
                {{ Form::time('horarioProgramado', $consulta->horarioProgramado, ['class' => 'form-control' . ($errors->has('horarioProgramado') ? ' is-invalid' : '')]) }}
                {!! $errors->first('horarioProgramado', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <br>
        <div class="row">
            <script>
                function getCheckboxStatus(var name){
                   var status = document.getElementById(name).checked;
                   if (status) {
                        document.getElementById(name).value = "1";
                   } else {
                        document.getElementById(name).value = "0"
                   }
                }
            </script>
            <div class="form-group col-auto" style = "width:10em">
                <label class="form-label" for="asistencia">Asistencia</label>
                <input type="checkbox" id="asistencia" name="asistencia" value="1" onchange="getCheckboStatus('asistencia')">
            </div>
            <div class="form-group col-auto" style = "width:10em">
                <label class="form-label" for="pago">Pago</label>
                <input type="checkbox" id="pagoCompleto" name="pagoCompleto" value="1" onchange="getCheckboStatus('pagoCompleto')">
            </div>
        </div>

    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Registrar</button>
        <button type="reset" class="btn btn-danger">Cancelar</button>
        <a class="btn btn-secondary" href="{{ route('consulta.index') }}"><i class="fa-solid fa-chevron-left"></i> Regresar</a>
    </div>
</div>