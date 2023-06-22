@extends('layouts.app')

@section('template_title')
    Plantline
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Lineas de producción') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('plantlines.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar linea') }}
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

										<th>Linea</th>
										<th>Tipo corte</th>
										<th>Velocidad</th>
										<th>Id Moldes</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($plantlines as $plantline)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $plantline->line }}</td>
											<td>{{ $plantline->cut_type }}</td>
											<td>{{ $plantline->speed }}</td>
											<td>{{ $plantline->id_molds }}</td>

                                            <td>
                                                <form action="{{ route('plantlines.destroy',$plantline->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('plantlines.show',$plantline->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('plantlines.edit',$plantline->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $plantlines->links() !!}
            </div>
        </div>
    </div>
@endsection
