@extends('layouts.app')

@section('template_title')
    {{ $plantline->name ?? "{{ __('Show') Plantline" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Linea</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('plantlines.index') }}"> {{ __('Atrás') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Linea:</strong>
                            {{ $plantline->line }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo corte:</strong>
                            {{ $plantline->cut_type }}
                        </div>
                        <div class="form-group">
                            <strong>Velocidad:</strong>
                            {{ $plantline->speed }}
                        </div>
                        <div class="form-group">
                            <strong>Id Moldes:</strong>
                            {{ $plantline->id_molds }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
