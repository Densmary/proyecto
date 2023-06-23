@extends('layouts.app')

@section('template_title')
    Car
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Carros') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cars.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar nuevo') }}
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
                                        
										<th>Modelo</th>
										<th>N° de Chasis</th>
										<th>Disposición</th>
										<th>Tipo de combustible</th>
										<th>Tipo transmisión</th>
										<th>Tipo de motor</th>
										<th>Año Modelo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cars as $car)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $car->model }}</td>
											<td>{{ $car->n°_chasis }}</td>
											<td>{{ $car->disposition }}</td>
											<td>{{ $car->fuel_type }}</td>
											<td>{{ $car->transmission_type }}</td>
											<td>{{ $car->engine_type }}</td>
											<td>{{ $car->age_model }}</td>

                                            <td>
                                                <form action="{{ route('cars.destroy',$car->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cars.show',$car->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Enviar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cars.edit',$car->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $cars->links() !!}
            </div>
        </div>
    </div>
@endsection
