@extends('layouts.app')

@section('template_title')
    Sheet
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Chapa espesor') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('sheets.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar nueva') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Id</th>

										<th>Calibre</th>
										<th>Espesor</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sheets as $sheet)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $sheet->calibre }}</td>
											<td>{{ $sheet->thicknesses }}</td>

                                            <td>
                                                <form action="{{ route('sheets.destroy',$sheet->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('sheets.show',$sheet->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('sheets.edit',$sheet->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Borrar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $sheets->links() !!}
            </div>
        </div>
    </div>
@endsection
