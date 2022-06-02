@extends('layouts.app')

@section('template_title')
    {{ $lugare->name ?? 'Show Lugare' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Lugares</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('lugares.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Numero:</strong>
                            {{ $lugare->numero }}
                        </div>
                        <div class="form-group">
                            <strong>Area Id:</strong>
                            {{ $lugare->area_id }}
                        </div>
                        <div class="form-group">
                            <strong>Estado Id:</strong>
                            {{ $lugare->estado_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<script></script>