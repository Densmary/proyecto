@extends('layouts.app')

@section('template_title')
    {{ $order->name ?? "{{ __('Show') Order" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Orden</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('orders.index') }}"> {{ __('Atrás') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Cantidad requerida:</strong>
                            {{ $order->required_quantity }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $order->date }}
                        </div>
                        <div class="form-group">
                            <strong>Id Clientes:</strong>
                            {{ $order->id_clients }}
                        </div>
                        <div class="form-group">
                            <strong>Id Pedido:</strong>
                            {{ $order->id_departures }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
