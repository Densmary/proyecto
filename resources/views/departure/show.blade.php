@extends('layouts.app')

@section('template_title')
    {{ $departure->name ?? "{{ __('Show') Departure" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Partida</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('departures.index') }}"> {{ __('Atrás') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>N° de unidades:</strong>
                            {{ $departure->n_units }}
                        </div>
                        <div class="form-group">
                            <strong>Orden de manufactura:</strong>
                            {{ $departure->manufacturing_order }}
                        </div>
                        <div class="form-group">
                            <strong>Costo de producción:</strong>
                            {{ $departure->production_cost }}
                        </div>
                        <div class="form-group">
                            <strong>Id Pedido:</strong>
                            {{ $departure->id_orders }}
                        </div>
                        <div class="form-group">
                            <strong>Id Linea:</strong>
                            {{ $departure->id_plantlines }}
                        </div>
                        <div class="form-group">
                            <strong>Id Producto:</strong>
                            {{ $departure->id_products }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
