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
                            <span class="card-title">{{ __('Mostrar') }} Ordenes </span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('departures.index') }}"> {{ __('Atrás') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>N° Unidades:</strong>
                            {{ $departure->n_units }}
                        </div>
                        <div class="form-group">
                            <strong>Orden de manufactura:</strong>
                            {{ $departure->manufacturing_order }}
                        </div>
                        <div class="form-group">
                            <strong>Costo produción:</strong>
                            {{ $departure->production_cost }}
                        </div>
                        <div class="form-group">
                            <strong>Id Lineas:</strong>
                            {{ $departure->id_plantlines }}
                        </div>
                        <div class="form-group">
                            <strong>Id Productos:</strong>
                            {{ $departure->id_products }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
