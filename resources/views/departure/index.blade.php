@extends('layouts.app')

@section('template_title')
    Departure
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ordenes de producción') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('departures.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nueva') }}
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
                                        
										<th>N° de unidades</th>
										<th>Orden de manofactura</th>
										<th>Costo de producción</th>
										<th>Id Pedido</th>
										<th>Id Linea</th>
										<th>Id Producto</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($departures as $departure)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $departure->n_units }}</td>
											<td>{{ $departure->manufacturing_order }}</td>
											<td>{{ $departure->production_cost }}</td>
											<td>{{ $departure->id_orders }}</td>
											<td>{{ $departure->id_plantlines }}</td>
											<td>{{ $departure->id_products }}</td>

                                            <td>
                                                <form action="{{ route('departures.destroy',$departure->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('departures.show',$departure->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('departures.edit',$departure->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $departures->links() !!}
            </div>
        </div>
    </div>
@endsection
