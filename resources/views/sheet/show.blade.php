@extends('layouts.app')

@section('template_title')
    {{ $sheet->name ?? "{{ __('Show') Sheet" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Sheet</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('sheets.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Calibre:</strong>
                            {{ $sheet->calibre }}
                        </div>
                        <div class="form-group">
                            <strong>Thicknesses:</strong>
                            {{ $sheet->thicknesses }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
