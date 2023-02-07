<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_mascota') }}
            {{ Form::text('nombre_mascota', $mascota->nombre_mascota, ['class' => 'form-control' . ($errors->has('nombre_mascota') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Mascota']) }}
            {!! $errors->first('nombre_mascota', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_id') }}
            {{ Form::text('tipo_id', $mascota->tipo_id, ['class' => 'form-control' . ($errors->has('tipo_id') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Id']) }}
            {!! $errors->first('tipo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>