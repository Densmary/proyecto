@extends('layouts.app')

@section('template_title')
    {{ $operator->name ?? "{{ __('Show') Operator" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Operadores</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('operators.index') }}"> {{ __('Atrás') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $operator->name }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $operator->last_name }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $operator->sex }}
                        </div>
                        <div class="form-group">
                            <strong>Cédula:</strong>
                            {{ $operator->identificacion_card }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $operator->age }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $operator->email }}
                        </div>
                        <div class="form-group">
                            <strong>Teléfono:</strong>
                            {{ $operator->phone }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
