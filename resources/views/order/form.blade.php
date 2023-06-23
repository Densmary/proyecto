<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id Productos') }}
            {{ Form::text('id_products', $order->id_products, ['class' => 'form-control' . ($errors->has('id_products') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_products', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cantidad requerida') }}
            {{ Form::text('required_quantity', $order->required_quantity, ['class' => 'form-control' . ($errors->has('required_quantity') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('required_quantity', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::text('date', $order->date, ['class' => 'form-control' . ($errors->has('date') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id Cliente') }}
            {{ Form::text('id_clients', $order->id_clients, ['class' => 'form-control' . ($errors->has('id_clients') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_clients', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Crear') }}</button>
    </div>
</div>