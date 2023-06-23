<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Modelo') }}
            {{ Form::text('model', $car->model, ['class' => 'form-control' . ($errors->has('model') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('model', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('N° de Chasis') }}
            {{ Form::text('n°_chasis', $car->n°_chasis, ['class' => 'form-control' . ($errors->has('n°_chasis') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('n°_chasis', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Disposición') }}
            {{ Form::text('disposition', $car->disposition, ['class' => 'form-control' . ($errors->has('disposition') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('disposition', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo de combustible') }}
            {{ Form::text('fuel_type', $car->fuel_type, ['class' => 'form-control' . ($errors->has('fuel_type') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('fuel_type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo transmisión') }}
            {{ Form::text('transmission_type', $car->transmission_type, ['class' => 'form-control' . ($errors->has('transmission_type') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('transmission_type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo de motor') }}
            {{ Form::text('engine_type', $car->engine_type, ['class' => 'form-control' . ($errors->has('engine_type') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('engine_type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Año modelo') }}
            {{ Form::text('age_model', $car->age_model, ['class' => 'form-control' . ($errors->has('age_model') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('age_model', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Agregar') }}</button>
    </div>
</div>