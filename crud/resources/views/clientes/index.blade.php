@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Clientes</h4>
                    @auth
                        <a href="{{ route('clientes.create') }}" class="btn btn-light btn-sm">
                            + Nuevo Cliente
                        </a>
                    @endauth
                </div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    @if($clientes->isEmpty())
                        <div class="alert alert-info text-center">No hay clientes registrados aún.</div>
                    @else
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover align-middle text-center">
                                <thead class="table-primary">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Email</th>
                                        <th>Teléfono</th>
                                        @auth <th>Acciones</th> @endauth
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($clientes as $cliente)
                                        <tr>
                                            <td>{{ $cliente->id }}</td>
                                            <td>{{ $cliente->nombre }}</td>
                                            <td>{{ $cliente->apellido }}</td>
                                            <td>{{ $cliente->email }}</td>
                                            <td>{{ $cliente->telefono }}</td>
                                            
                                                <td>
                                                    <a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-info btn-sm mb-1">Ver</a>
                                                    @auth
                                                    <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning btn-sm mb-1">Editar</a>
                                                    <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('¿Deseas eliminar este cliente?')">
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
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
