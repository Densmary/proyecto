<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Cambios de partida') }}
            {{ Form::text('departures_change', $record->departures_change, ['class' => 'form-control' . ($errors->has('departures_change') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('departures_change', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Averías') }}
            {{ Form::text('breackdowns', $record->breackdowns, ['class' => 'form-control' . ($errors->has('breackdowns') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('breackdowns', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Incidentes') }}
            {{ Form::text('Incidents', $record->Incidents, ['class' => 'form-control' . ($errors->has('Incidents') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('Incidents', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::text('date', $record->date, ['class' => 'form-control' . ($errors->has('date') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_Lineas') }}
            {{ Form::text('plantlines', $record->plantlines, ['class' => 'form-control' . ($errors->has('plantlines') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('plantlines', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_operatores') }}
            {{ Form::text('id_operators', $record->id_operators, ['class' => 'form-control' . ($errors->has('id_operators') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_operators', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Agregar') }}</button>
    </div>
</div>
