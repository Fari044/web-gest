@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Detalle de Venta #{{ $venta->id }}</h4>
                </div>

                <div class="card-body">
                    <p><strong>Cliente:</strong> {{ $venta->cliente->nombre }} {{ $venta->cliente->apellido }}</p>
                    <p><strong>Total:</strong> ${{ number_format($venta->total, 2) }}</p>
                    
                    <a href="{{ route('ventas.index') }}" class="btn btn-secondary mt-3">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
