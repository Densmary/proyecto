@extends('layouts.app')

@section('template_title')
    {{ $record->name ?? "{{ __('Show') Record" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Registro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('records.index') }}"> {{ __('Atrás') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Cambios de partida:</strong>
                            {{ $record->departures_change }}
                        </div>
                        <div class="form-group">
                            <strong>Averias:</strong>
                            {{ $record->breackdowns }}
                        </div>
                        <div class="form-group">
                            <strong>Incidentes:</strong>
                            {{ $record->Incidents }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $record->date }}
                        </div>
                        <div class="form-group">
                            <strong>Lineas:</strong>
                            {{ $record->plantlines }}
                        </div>
                        <div class="form-group">
                            <strong>Id Operadores:</strong>
                            {{ $record->id_operators }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
