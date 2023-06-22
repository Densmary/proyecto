<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('linea') }}
            {{ Form::text('line', $plantline->line, ['class' => 'form-control' . ($errors->has('line') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('line', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo corte') }}
            {{ Form::text('cut_type', $plantline->cut_type, ['class' => 'form-control' . ($errors->has('cut_type') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('cut_type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Velocidad') }}
            {{ Form::text('speed', $plantline->speed, ['class' => 'form-control' . ($errors->has('speed') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('speed', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_moldes') }}
            {{ Form::text('id_molds', $plantline->id_molds, ['class' => 'form-control' . ($errors->has('id_molds') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_molds', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>
