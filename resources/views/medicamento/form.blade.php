
<div class="form-group mb-3">
    @if($medicamento->exists)
    {{ Form::model($medicamento, ['route' => ['medicamentos.update', $medicamento->id], 'method' => 'put', 'enctype' => 'multipart/form-data']) }}
@else
    {{ Form::model(['route' => 'medicamentos.store', 'method' => 'post', 'enctype' => 'multipart/form-data']) }}
@endif

<label class="form-label">{{ Form::label('imagen', 'Imagen') }}</label>

@if ($medicamento->exists && $medicamento->imagen)
    <img src="{{ asset('storage/' . $medicamento->imagen) }}" alt="Imagen actual" width="350">
    <p>Selecciona otra imagen para actualizar.</p>
@endif

<div>
    {{ Form::file('imagen', ['class' => 'form-control-file']) }}
    {!! $errors->first('imagen', '<div class="invalid-feedback">:message</div>') !!}
    <small class="form-hint">Instrucciones sobre la imagen del medicamento.</small>
</div>


</div>

<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre') }}</label>
    <div>
        {{ Form::text('nombre', $medicamento->nombre, ['class' => 'form-control' .
        ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}

    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('codigo') }}</label>
    <div>
        {{ Form::text('codigo', $medicamento->codigo, ['class' => 'form-control' .
        ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
        {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}

    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('categoria') }}</label>
    <div>
        {{ Form::select('categoria', [
            'TABLETA' => 'tableta',
            'JARABE' => 'jarabe',
            'INYECCION' => 'Inyección',
            'CREMA' => 'Crema',
            'UNGUENTO' => 'Ungüento',
        ], $medicamento->categoria, ['class' => 'form-control' . ($errors->has('categoria') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una categoria']) }}
        {!! $errors->first('categoria', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('unidad_medida') }}</label>
    <div>
        {{ Form::text('unidad_medida', $medicamento->unidad_medida, ['class' => 'form-control' .
        ($errors->has('unidad_medida') ? ' is-invalid' : ''), 'placeholder' => 'Unidad Medida']) }}
        {!! $errors->first('unidad_medida', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('cantidad_stock') }}</label>
    <div>
        {{ Form::text('cantidad_stock', $medicamento->cantidad_stock, ['class' => 'form-control' .
        ($errors->has('cantidad_stock') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad Stock']) }}
        {!! $errors->first('cantidad_stock', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('fecha_caducidad') }}</label>
    <div>
        {{ Form::date('fecha_caducidad', $medicamento->fecha_caducidad, ['class' => 'form-control' .
        ($errors->has('fecha_caducidad') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Caducidad']) }}
        {!! $errors->first('fecha_caducidad', '<div class="invalid-feedback">:message</div>') !!}

    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('precio_compra') }}</label>
    <div>
        {{ Form::text('precio_compra', $medicamento->precio_compra, ['class' => 'form-control' .
        ($errors->has('precio_compra') ? ' is-invalid' : ''), 'placeholder' => 'Precio Compra']) }}
        {!! $errors->first('precio_compra', '<div class="invalid-feedback">:message</div>') !!}

    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('precio_venta') }}</label>
    <div>
        {{ Form::text('precio_venta', $medicamento->precio_venta, ['class' => 'form-control' .
        ($errors->has('precio_venta') ? ' is-invalid' : ''), 'placeholder' => 'Precio Venta']) }}
        {!! $errors->first('precio_venta', '<div class="invalid-feedback">:message</div>') !!}

    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('precio_venta_unidad') }}</label>
    <div>
        {{ Form::text('precio_venta_unidad', $medicamento->precio_venta_unidad, ['class' => 'form-control' .
        ($errors->has('precio_venta_unidad') ? ' is-invalid' : ''), 'placeholder' => 'Precio Venta por unidad']) }}
        {!! $errors->first('precio_venta_unidad', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">Proveedor</label>
    <div>
        <select name="proveedor" id="proveedor" class="form-control" placeholder="Seleccione un proveedor">
            @foreach ($proveedores as $proveedor)
                <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
            @endforeach
        </select>
        {!! $errors->first('proveedor', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

{{-- <div class="col-md-3">
    <div class="form-group mb-3">
        <label class="form-label">{{ Form::label('proveedor') }}</label>
        <div>
            {{ Form::select('proveedor', $proveedores, $ingreso->proveedor_id, ['class' => 'form-control' . ($errors->has('proveedor') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione un proveedor']) }}
            {!! $errors->first('proveedor', '<div class="invalid-feedback">:message</div>') !!}

        </div>
    </div>
</div> --}}

<div class="form-footer">
    <div class="text-end">
        <div class="d-flex">
            <a href="{{asset('/medicamentos')}}" class="btn btn-danger">Cancelar</a>
            <button type="submit" class="btn btn-primary ms-auto ajax-submit">Guardar</button>
        </div>
    </div>
</div>

