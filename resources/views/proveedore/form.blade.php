<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group mb-3">
                <label class="form-label">{{ Form::label('tipo_documento') }}</label>
                <div>
                    {{ Form::select('tipo_documento', [
                        'RUC' => 'RUC',
                        'DNI' => 'DNI',
                        'PAS' => 'PAS',
                    ], $proveedore->tipo_documento, ['class' => 'form-control' . ($errors->has('tipo_documento') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione tipo documento']) }}
                    {!! $errors->first('tipo_documento', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>

            <div class="form-group mb-3">
                <label class="form-label">{{ Form::label('numero_documento') }}</label>
                <div>
                    {{ Form::text('numero_documento', $proveedore->numero_documento, ['class' => 'form-control' . ($errors->has('numero_documento') ? ' is-invalid' : ''), 'placeholder' => 'Numero Documento']) }}
                    {!! $errors->first('numero_documento', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>

            <div class="form-group mb-3">
                <label class="form-label">{{ Form::label('nombre') }}</label>
                <div>
                    {{ Form::text('nombre', $proveedore->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                    {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>

        <div class="col-md-6">


            <div class="form-group mb-3">
                <label class="form-label">{{ Form::label('direccion') }}</label>
                <div>
                    {{ Form::text('direccion', $proveedore->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
                    {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>

            <div class="form-group mb-3">
                <label class="form-label">{{ Form::label('telefono') }}</label>
                <div>
                    {{ Form::text('telefono', $proveedore->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
                    {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>

            <div class="form-group mb-3">
                <label class="form-label">{{ Form::label('correo') }}</label>
                <div>
                    {{ Form::text('correo', $proveedore->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
                    {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-footer d-flex justify-content-end">
                <a href="{{asset('/proveedores')}}" class="btn btn-danger me-2"><i class="ti ti-circle-x-filled"> </i></a>
                <button type="submit" class="btn btn-primary ajax-submit"><i class="ti ti-device-floppy"> </i></button>
            </div>
        </div>
    </div>

</div>
