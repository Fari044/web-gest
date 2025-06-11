@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Ventas</h4>
                    @auth
                    <a href="{{ route('ventas.create') }}" class="btn btn-light btn-sm">
                        + Nueva Venta
                    </a>
                    @endauth
                </div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    @if($ventas->isEmpty())
                        <div class="alert alert-info text-center">No hay ventas registradas aún.</div>
                    @else
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover align-middle text-center">
                                <thead class="table-success">
                                    <tr>
                                        <th>ID</th>
                                        <th>Cliente</th>
                                        <th>Total</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ventas as $venta)
                                        <tr>
                                            <td>{{ $venta->id }}</td>
                                            <td>{{ $venta->cliente->nombre ?? 'Cliente no encontrado' }}</td>
                                            <td>${{ number_format($venta->total, 2) }}</td>
                                            <td>
                                                <a href="{{ route('ventas.show', $venta->id) }}" class="btn btn-info btn-sm mb-1">Ver</a>
                                                @auth
                                                <a href="{{ route('ventas.edit', $venta->id) }}" class="btn btn-warning btn-sm mb-1">Editar</a>
                                                <form action="{{ route('ventas.destroy', $venta->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('¿Deseas eliminar esta venta?')">
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

                        <div class="d-flex justify-content-center mt-3">
                            {{ $ventas->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
