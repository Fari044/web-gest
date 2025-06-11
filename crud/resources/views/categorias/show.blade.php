@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="card shadow-sm border-0 rounded">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Detalle de Categoría</h4>
        </div>
        <div class="card-body">
            <p class="mb-2"><strong>Nombre:</strong> <span class="text-secondary">{{ $categoria->Nombre }}</span></p>
            <p class="mb-4"><strong>Descripción:</strong> <span class="text-secondary">{{ $categoria->Descripcion }}</span></p>

            <a href="{{ route('categorias.index') }}" class="btn btn-outline-secondary">Volver</a>
        </div>
    </div>
</div>
@endsection
