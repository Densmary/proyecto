@extends('layouts.app')

@section('template_title')
    {{ $client->name ?? "{{ __('Show') Client" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clients.index') }}"> {{ __('Atrás') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $client->name }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $client->last_name }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $client->sex }}
                        </div>
                        <div class="form-group">
                            <strong>Cédula:</strong>
                            {{ $client->identificacion_card }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $client->age }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $client->email }}
                        </div>
                        <div class="form-group">
                            <strong>Teléfono:</strong>
                            {{ $client->phone }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
