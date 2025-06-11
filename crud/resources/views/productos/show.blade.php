@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Detalle Producto</h4>
                </div>
                <div class="card-body">
                    <dl class="row">
                        <dt class="col-sm-4">Nombre:</dt>
                        <dd class="col-sm-8">{{ $producto->Nombre }}</dd>

                        <dt class="col-sm-4">Descripción:</dt>
                        <dd class="col-sm-8">{{ $producto->Descripcion }}</dd>

                        <dt class="col-sm-4">Precio:</dt>
                        <dd class="col-sm-8">${{ number_format($producto->Precio, 2) }}</dd>

                        <dt class="col-sm-4">Cantidad:</dt>
                        <dd class="col-sm-8">{{ $producto->Cantidad }}</dd>

                        <dt class="col-sm-4">Categoría:</dt>
                        <dd class="col-sm-8">{{ $producto->categoria->Nombre ?? 'N/A' }}</dd>
                    </dl>

                    <a href="{{ route('productos.index') }}" class="btn btn-secondary">
                        Volver
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
