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
                            <span class="card-title">{{ __('Show') }} Car</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cars.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Model:</strong>
                            {{ $car->model }}
                        </div>
                        <div class="form-group">
                            <strong>N° Chasis:</strong>
                            {{ $car->n°_chasis }}
                        </div>
                        <div class="form-group">
                            <strong>Disposition:</strong>
                            {{ $car->disposition }}
                        </div>
                        <div class="form-group">
                            <strong>Fuel Type:</strong>
                            {{ $car->fuel_type }}
                        </div>
                        <div class="form-group">
                            <strong>Transmission Type:</strong>
                            {{ $car->transmission_type }}
                        </div>
                        <div class="form-group">
                            <strong>Engine Type:</strong>
                            {{ $car->engine_type }}
                        </div>
                        <div class="form-group">
                            <strong>Age Model:</strong>
                            {{ $car->age_model }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
