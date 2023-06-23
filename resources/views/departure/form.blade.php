<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('N° de unidades') }}
            {{ Form::text('n_units', $departure->n_units, ['class' => 'form-control' . ($errors->has('n_units') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('n_units', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Orden de manufactura') }}
            {{ Form::text('manufacturing_order', $departure->manufacturing_order, ['class' => 'form-control' . ($errors->has('manufacturing_order') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('manufacturing_order', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Costo de producción') }}
            {{ Form::text('production_cost', $departure->production_cost, ['class' => 'form-control' . ($errors->has('production_cost') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('production_cost', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id pedido') }}
            {{ Form::text('id_orders', $departure->id_orders, ['class' => 'form-control' . ($errors->has('id_orders') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_orders', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id linea') }}
            {{ Form::text('id_plantlines', $departure->id_plantlines, ['class' => 'form-control' . ($errors->has('id_plantlines') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_plantlines', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id producto') }}
            {{ Form::text('id_products', $departure->id_products, ['class' => 'form-control' . ($errors->has('id_products') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_products', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Crear') }}</button>
    </div>
</div>