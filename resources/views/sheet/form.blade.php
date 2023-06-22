<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Calibre') }}
            {{ Form::text('calibre', $sheet->calibre, ['class' => 'form-control' . ($errors->has('calibre') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('calibre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Espesor') }}
            {{ Form::text('thicknesses', $sheet->thicknesses, ['class' => 'form-control' . ($errors->has('thicknesses') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('thicknesses', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
