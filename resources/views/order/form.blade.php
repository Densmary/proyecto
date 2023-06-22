<div class="box box-info padding-1">
    <div class="box-body">

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
            {{ Form::label('id_clientes') }}
            {{ Form::text('id_clients', $order->id_clients, ['class' => 'form-control' . ($errors->has('id_clients') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_clients', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_pedido') }}
            {{ Form::text('id_departures', $order->id_departures, ['class' => 'form-control' . ($errors->has('id_departures') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_departures', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>
