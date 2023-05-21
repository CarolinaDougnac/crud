@extends('layouts.app')

@section('template_title')
    {{ $marca->name ?? "{{ __('Show') Marca" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Marca</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('marcas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $marca->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Proveedore Id:</strong>
                            {{ $marca->proveedore_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection