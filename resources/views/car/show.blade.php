@extends('layouts.app')

@section('template_title')
    {{ $car->name ?? "{{ __('Show') Car" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Carro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cars.index') }}"> {{ __('Atrás') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $car->brand }}
                        </div>
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $car->model }}
                        </div>
                        <div class="form-group">
                            <strong>N° de Chasis:</strong>
                            {{ $car->n°_chasis }}
                        </div>
                        <div class="form-group">
                            <strong>Disposición:</strong>
                            {{ $car->disposition }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de combustible:</strong>
                            {{ $car->fuel_type }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de transmición:</strong>
                            {{ $car->transmission_type }}
                        </div>
                        <div class="form-group">
                            <strong>Tpo de motor:</strong>
                            {{ $car->engine_type }}
                        </div>
                        <div class="form-group">
                            <strong>Año Modelo:</strong>
                            {{ $car->age_model }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
