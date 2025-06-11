@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Detalle del Cliente</h4>
                </div>
                <div class="card-body">
                    <p><strong>Nombre:</strong> {{ $cliente->nombre }}</p>
                    <p><strong>Apellido:</strong> {{ $cliente->apellido }}</p>
                    <p><strong>Email:</strong> {{ $cliente->email }}</p>
                    <p><strong>Teléfono:</strong> {{ $cliente->telefono }}</p>
                </div>
            </div>
            <a href="{{ route('clientes.index') }}" class="btn btn-secondary mt-3">Volver</a>
        </div>
    </div>
</div>
@endsection
