@extends('tablar::page')

@section('title')
    Ingreso
@endsection

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        List
                    </div>
                    <h2 class="page-title">
                        {{ __('Ingreso ') }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('ingresos.create') }}" class="btn btn-primary d-none d-sm-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <line x1="12" y1="5" x2="12" y2="19"/>
                                <line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                            Create Ingreso
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            @if(config('tablar','display_alert'))
                @include('tablar::common.alert')
            @endif
            <div class="row row-deck row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Ingreso</h3>
                        </div>
                        <div class="card-body border-bottom py-3">
                            <div class="d-flex">
                                <div class="text-muted">
                                    Show
                                    <div class="mx-2 d-inline-block">
                                        <input type="text" class="form-control form-control-sm" value="10" size="3"
                                               aria-label="Invoices count">
                                    </div>
                                    entries
                                </div>
                                <div class="ms-auto text-muted">
                                    Search:
                                    <div class="ms-2 d-inline-block">
                                        <input type="text" class="form-control form-control-sm"
                                               aria-label="Search invoice">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive min-vh-100">
                            <table class="table card-table table-vcenter text-nowrap datatable">
                                <thead>
                                <tr>
                                    <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox"
                                                           aria-label="Select all invoices"></th>
                                    <th class="w-1">No.
                                        <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="icon icon-sm text-dark icon-thick" width="24" height="24"
                                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <polyline points="6 15 12 9 18 15"/>
                                        </svg>
                                    </th>

										<th>Fecha</th>
										<th>Proveedor</th>
										<th>Tipo Comprobante</th>
										<th>Serie Comprobante</th>
										<th>Numero Comprobante</th>
										<th>Impuesto</th>
										<th>Medicamento</th>
										<th>Cantidad</th>
										<th>Precio Compra</th>
										<th>Precio Venta</th>

                                    <th class="w-1"></th>
                                </tr>
                                </thead>

                                <tbody>
                                @forelse ($ingresos as $ingreso)
                                    <tr>
                                        <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                                   aria-label="Select ingreso"></td>
                                        <td>{{ ++$i }}</td>

											<td>{{ $ingreso->fecha }}</td>
											<td>{{ $ingreso->proveedor }}</td>
											<td>{{ $ingreso->tipo_comprobante }}</td>
											<td>{{ $ingreso->serie_comprobante }}</td>
											<td>{{ $ingreso->numero_comprobante }}</td>
											<td>{{ $ingreso->impuesto }}</td>
											<td>{{ $ingreso->medicamento }}</td>
											<td>{{ $ingreso->Cantidad }}</td>
											<td>{{ $ingreso->precio_compra }}</td>
											<td>{{ $ingreso->precio_venta }}</td>

                                        <td>
                                            <div class="btn-list flex-nowrap">
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle align-text-top"
                                                            data-bs-toggle="dropdown">
                                                        Actions
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item"
                                                           href="{{ route('ingresos.show',$ingreso->id) }}">
                                                            View
                                                        </a>
                                                        <a class="dropdown-item"
                                                           href="{{ route('ingresos.edit',$ingreso->id) }}">
                                                            Edit
                                                        </a>
                                                        <form
                                                            action="{{ route('ingresos.destroy',$ingreso->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                    onclick="if(!confirm('Do you Want to Proceed?')){return false;}"
                                                                    class="dropdown-item text-red"><i
                                                                    class="fa fa-fw fa-trash"></i>
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <td>No Data Found</td>
                                @endforelse
                                </tbody>

                            </table>
                        </div>
                       <div class="card-footer d-flex align-items-center">
                            {!! $ingresos->links('tablar::pagination') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

           {{-- prueba --}}

           <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Ingresos <a href="{!!URL::to('/compras/ingreso/create')!!}" class="btn btn-primary">Nuevo</a></h4>
                        {{-- @include('compras.ingreso.search') --}}
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-condensed table-hover">
                                <thead>
                                    <th>Fecha</th>
                                    <th>Proveedor</th>
                                    <th>Comprobante</th>
                                    <th>Impuesto</th>
                                    <th>Total</th>
                                    <th>Estado</th>
                                    <th>Opciones</th>
                                </thead>
                                <tbody>
                                    @foreach($ingresos as $ingreso)
                                    <tr>
                                        <td>{{$ingreso->fecha_hora}}</td>
                                        <td>{{$ingreso->nombre}}</td>
                                        <td>{{$ingreso->tipo_comprobante.': '.$ingreso->serie_comprobante.'-'.$ingreso->numero_comprobante}}</td>
                                        <td>{{$ingreso->impuesto}}</td>
                                        <td>{{$ingreso->total}}</td>
                                        <td>{{$ingreso->estado}}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                            <a href="{{URL::action('IngresoController@show',$ingreso->id)}}" class="btn btn-info"><i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="" data-target="#modal-delete-{{$ingreso->id}}" data-toggle="modal" class="btn btn-danger"><i class="mdi mdi-delete"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    @include('compras.ingreso.modal')
                                    @endforeach
                                </tbody>
                            </table>

                      </div>
                        <br>
                        <div class="col">
                            <nav aria-label="" class="d-flex justify-content-center">
                                {{$ingresos->render()}}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>









    </div>




@endsection
