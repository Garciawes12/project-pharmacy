@extends('tablar::page')

@section('title', 'Create Ingreso')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Create
                    </div>
                    <h2 class="page-title">
                        {{ __('Ingreso ') }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('ingresos.index') }}" class="btn btn-primary d-none d-sm-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <line x1="12" y1="5" x2="12" y2="19"/>
                                <line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                            Ingreso List
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
                            <h3 class="card-title">Ingreso Details</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('ingresos.store') }}" id="ajaxForm" role="form"
                                  enctype="multipart/form-data">
                                @csrf
                                @include('ingreso.form')
                            </form>
                        </div>
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
                <h4 class="card-title">Nuevo ingreso</h4>
                <hr>
                <div class="col-lg-12 col-md-12 col-xs-12">
                    @if(count($errors)>0)
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li><strong>{{$error}}</strong></li>
                            @endforeach
                        </ul>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    {{-- {!!Form::open(['route' => 'ingreso.index', 'method' => 'POST'])!!} --}}
                        <div class="form-group mb-3">
                            {{ Form::select('proveedor', $proveedores, $ingreso->proveedor_id, ['class' => 'form-control' . ($errors->has('proveedor') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione un proveedor']) }}
                    {!! $errors->first('proveedor', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="row">
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="form-group">
                                {!!Form::label('Tipo Comprobante: ')!!}
                                <select name="tipo_comprobante" class="form-control">
                                    <option value="Boleta">Boleta</option>
                                    <option value="Factura">Factura</option>
                                    <option value="Ticket">Ticket</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="form-group">
                                {!!Form::label('Serie Comprobante: ')!!}
                                {!!Form::number('serie_comprobante',null,['class'=>'form-control','placeholder'=>'Serie Comprobante...','value'=>"{{old('serie_comprobante')}}"])!!}
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="form-group">
                                {!!Form::label('Num Comprobante: ')!!}
                                {!!Form::number('numero_comprobante',null,['class'=>'form-control','placeholder'=>'Numero Comprobante...','value'=>", 'required' {{old('numero_comprobante')}}"])!!}
                            </div>
                        </div>
                    </div>
                        <div class="panel panel-primary" style="width:100%">
                            <div class="panel-body" style="width:100%">
                            <div class="row">
                                <div class="col-md-4 col-xs-12">
                                    <div class="form-group">
                                        {!!Form::label('Articulo: ')!!}
                                        <select name="id_articulo" class="form-control selectpicker"   data-live-search="true" id="pidarticulo">
                                           {{-- @foreach($articulos as $articulo)
                                            <option value="{{$articulo->id}}">
                                                {{$articulo->articulo}}
                                            </option>
                                            @endforeach --}}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2 col-xs-12">
                                    <div class="form-group">
                                        {!!Form::label('Cantidad: ')!!}
                                        {!!Form::number('cantidad',null,['class'=>'form-control','id'=>'pcantidad'])!!}
                                    </div>
                                </div>
                                <div class="col-md-2 col-xs-12">
                                    <div class="form-group">
                                        {!!Form::label('Precio Compra: ')!!}
                                        {!!Form::number('precio_compra',null,['class'=>'form-control','id'=>'pprecio_compra'])!!}
                                    </div>
                                </div>
                                <div class="col-md-2 col-xs-12">
                                    <div class="form-group">
                                        {!!Form::label('Precio Venta: ')!!}
                                        {!!Form::number('precio_venta',null,['class'=>'form-control', 'id'=>'pprecio_venta'])!!}
                                    </div>
                                </div>
                                <div class="col-md-2 col-xs-12">
                                    <div class="form-group">
                                       <button type="button" id="bt_add" class="btn btn-success">Agregar</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                                    <thead class="thead-light">
                                        <th>Opciones</th>
                                        <th></th>
                                        <th>Cantidad</th>
                                        <th>P. Compra</th>
                                        <th>P. Venta</th>
                                        <th>Subtotal</th>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                    <tfoot>
                                        <th>TOTAL</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th><h4 id="total">$/. 0.00</h4></th>
                                    </tfoot>
                                </table>
                            </div>
                            <br>
                            </div>
                        </div>

                    <div class = "form-group" id="guardar">
                        <a href="{!!URL::to('compras/ingreso/')!!}" class="btn btn-danger">Cancelar</a>
                       {!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
                    </div>
                    {!!Form::close()!!}
                </div>

            </div>
            <!--cardbody-->
        </div>
    </div>
</div>
<!-- scripts-->
@push('scripts')
<script>
    $(document).ready(function(){
        $('#bt_add').click(function(){
           agregar();
        });
    });

    var cont=0;
    total=0;
    subtotal=[];
    $("#guardar").hide();

    function agregar(){
        idarticulo=$("#pidarticulo").val();
        articulo=$("#pidarticulo option:selected").text();
        cantidad=$("#pcantidad").val();
        precio_compra=$("#pprecio_compra").val();
        precio_venta=$("#pprecio_venta").val();

        if(idarticulo!="" && cantidad!="" && cantidad>0 && precio_compra!="" && precio_venta!=""){
            subtotal[cont]=(cantidad*precio_compra);
            total=total+subtotal[cont];
            var fila='<tr class="selected" id="fila'+cont+'"><td><button class="btn btn-warning" onclick="eliminar('+cont+')">X</button></td><td><input type="hidden" name="idarticulo[]" value="'+idarticulo+'">'+articulo+'</td><td><input type="number" name="cantidad[]" value="'+cantidad+'"></td><td><input type="number" name="precio_compra[]" value="'+precio_compra+'"></td><td><input type="number" name="precio_venta[]" value="'+precio_venta+'"></td><td>'+subtotal[cont]+'</td></tr>';
            cont++;
            limpiar();
            $("#total").html("$/. "+total);
            evaluar();
            $("#detalles").append(fila);

        }else{
            alert("Error al ingresar el detalle");
        }
    }

    function limpiar(){
        $("#pcantidad").val("");
        $("#pprecio_compra").val("");
        $("#pprecio_venta").val("");
    }
    function evaluar(){
        if(total>0){$("#guardar").show();}
        else{$("#guardar").hide();}
    }

    function eliminar(index){
        total=total-subtotal[index];
        $("#total").html("$/. "+total);
        $("#fila" + index).remove();
        evaluar();
    }
</script>
@endpush
@endsection

