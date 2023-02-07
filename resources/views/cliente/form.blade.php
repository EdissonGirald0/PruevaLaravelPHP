<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('mascota_id') }}
            {{ Form::text('mascota_id', $cliente->mascota_id, ['class' => 'form-control' . ($errors->has('mascota_id') ? ' is-invalid' : ''), 'placeholder' => 'Mascota Id']) }}
            {!! $errors->first('mascota_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('documento_cliente') }}
            {{ Form::text('documento_cliente', $cliente->documento_cliente, ['class' => 'form-control' . ($errors->has('documento_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Documento Cliente']) }}
            {!! $errors->first('documento_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_cliente') }}
            {{ Form::text('nombre_cliente', $cliente->nombre_cliente, ['class' => 'form-control' . ($errors->has('nombre_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Cliente']) }}
            {!! $errors->first('nombre_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_celular') }}
            {{ Form::text('numero_celular', $cliente->numero_celular, ['class' => 'form-control' . ($errors->has('numero_celular') ? ' is-invalid' : ''), 'placeholder' => 'Numero Celular']) }}
            {!! $errors->first('numero_celular', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $cliente->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>