@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Lista de Productos</h4>
                    @auth
                    <a href="{{ route('productos.create') }}" class="btn btn-light btn-sm">+ Nuevo Producto</a>
                    @endauth
                </div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover align-middle">
                            <thead class="table-primary text-center">
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th>Categoría</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($productos as $producto)
                                <tr>
                                    <td>{{ $producto->Id_Producto }}</td>
                                    <td>{{ $producto->Nombre }}</td>
                                    <td>{{ $producto->Descripcion }}</td>
                                    <td>${{ number_format($producto->Precio, 2) }}</td>
                                    <td>{{ $producto->Cantidad }}</td>
                                    <td>{{ $producto->categoria->Nombre ?? 'N/A' }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('productos.show', $producto->Id_Producto) }}" class="btn btn-info btn-sm mb-1">Ver</a>
                                        @auth
                                        <a href="{{ route('productos.edit', $producto->Id_Producto) }}" class="btn btn-warning btn-sm mb-1">Editar</a>
                                        <form action="{{ route('productos.destroy', $producto->Id_Producto) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('¿Eliminar producto?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm">Eliminar</button>
                                        </form>
                                        @endauth
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-3">
                        {{ $productos->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
