@extends('layouts.app')

@section('template_title')
    {{ $cliente->name ?? 'Show Cliente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clientes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Mascota Id:</strong>
                            {{ $cliente->mascota_id }}
                        </div>
                        <div class="form-group">
                            <strong>Documento Cliente:</strong>
                            {{ $cliente->documento_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Cliente:</strong>
                            {{ $cliente->nombre_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Celular:</strong>
                            {{ $cliente->numero_celular }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $cliente->email }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
