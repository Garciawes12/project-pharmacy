<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="form-group mb-3">
                <label class="form-label">{{ Form::label('fecha') }}</label>
                <div>
                    {{ Form::date('fecha', $ingreso->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
                    {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group mb-3">
                <label class="form-label">{{ Form::label('proveedor') }}</label>
                <div>
                    {{ Form::select('proveedor', $proveedores, $ingreso->proveedor_id, ['class' => 'form-control' . ($errors->has('proveedor') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione un proveedor']) }}
                    {!! $errors->first('proveedor', '<div class="invalid-feedback">:message</div>') !!}

                </div>
            </div>
        </div>

    </div>
    <hr>
        <div class="col-md-3">
            <div class="form-group mb-3">
                <label class="form-label">{{ Form::label('tipo_comprobante') }}</label>
                <div>
                    {{ Form::select('tipo_comprobante', [
                        'Boleta' => 'BOLETA',
                        'Factura' => 'FACTURA',
                        'Comprobante' => 'COMPROBANTE',
                    ], $ingreso->tipo_comprobante, ['class' => 'form-control' . ($errors->has('tipo_comprobante') ? '     is-invalid' : ''), 'placeholder' => 'Tipo Comprobante']) }}
                    {!! $errors->first('tipo_comprobante', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group mb-3">
                <label class="form-label">{{ Form::label('serie_comprobante') }}</label>
                <div>
                    {{ Form::text('serie_comprobante', $ingreso->serie_comprobante, ['class' => 'form-control' . ($errors->has('serie_comprobante') ? ' is-invalid' : ''), 'placeholder' => 'Serie Comprobante']) }}
                    {!! $errors->first('serie_comprobante', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group mb-3">
                <label class="form-label">{{ Form::label('numero_comprobante') }}</label>
                <div>
                    {{ Form::text('numero_comprobante', $ingreso->numero_comprobante, ['class' => 'form-control' . ($errors->has('numero_comprobante') ? ' is-invalid' : ''), 'placeholder' => 'Numero Comprobante']) }}
                    {!! $errors->first('numero_comprobante', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group mb-3">
                <div class="form-check">
                    {{ Form::checkbox('aplicar_impuesto', 1, $ingreso->aplicar_impuesto, ['class' => 'form-check-input', 'id' => 'aplicar_impuesto']) }}
                    <label class="form-check-label" for="aplicar_impuesto">Aplicar 18% de impuesto</label>
                </div>
            </div>
        </div>


        <hr>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group mb-3">
                    <label class="form-label">{{ Form::label('medicamento') }}</label>
                    <div>
                        {{ Form::text('medicamento', $ingreso->medicamento, ['class' => 'form-control' . ($errors->has('medicamento') ? ' is-invalid' : ''), 'placeholder' => 'Ingresa el nombre del medicamento']) }}
                        {!! $errors->first('medicamento', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group mb-3">
                    <label class="form-label">{{ Form::label('Cantidad') }}</label>
                    <div>
                        {{ Form::text('Cantidad', $ingreso->Cantidad, ['class' => 'form-control' . ($errors->has('Cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad', 'style' => 'width: 150px']) }}
                        {!! $errors->first('Cantidad', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group mb-3">
                    <label class="form-label">{{ Form::label('precio_compra') }}</label>
                    <div>
                        {{ Form::text('precio_compra', $ingreso->precio_compra, ['class' => 'form-control' . ($errors->has('precio_compra') ? ' is-invalid' : ''), 'placeholder' => 'P.Compra', 'style' => 'width: 150px']) }}
                        {!! $errors->first('precio_compra', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group mb-3">
                    <label class="form-label">{{ Form::label('precio_venta') }}</label>
                    <div>
                        {{ Form::text('precio_venta', $ingreso->precio_venta, ['class' => 'form-control' . ($errors->has('precio_venta') ? ' is-invalid' : ''), 'placeholder' => 'P.Venta', 'style' => 'width: 150px']) }}
                        {!! $errors->first('precio_venta', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                </div>
            </div>

        </div>


    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="form-footer d-flex justify-content-end">
                <a href="{{asset('/ingresos')}}" class="btn btn-danger me-2"><i class="ti ti-circle-x-filled"> </i></a>
                <button type="submit" class="btn btn-primary ajax-submit"><i class="ti ti-device-floppy"> </i></button>
            </div>
        </div>
    </div>
</div>
