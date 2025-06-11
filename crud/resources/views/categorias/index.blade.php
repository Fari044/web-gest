@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Lista de Categorías</h4>
                    @auth
                    <a href="{{ route('categorias.create') }}" class="btn btn-light btn-sm">
                        + Nueva Categoría
                    </a>
                     @endauth
                </div>

                <div class="card-body">
                    @if($categorias->isEmpty())
                        <div class="alert alert-info text-center">No hay categorías registradas aún.</div>
                    @else
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover align-middle">
                            <thead class="table-primary text-center">
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categorias as $cat)
                                <tr>
                                    <td>{{ $cat->Id_Categoria }}</td>
                                    <td>{{ $cat->Nombre }}</td>
                                    <td>{{ $cat->Descripcion }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('categorias.show', $cat->Id_Categoria) }}" class="btn btn-info btn-sm mb-1">
                                            Ver
                                        </a>
                                        @auth
                                        <a href="{{ route('categorias.edit', $cat->Id_Categoria) }}" class="btn btn-warning btn-sm mb-1">
                                            Editar
                                        </a>
                                        <form action="{{ route('categorias.destroy', $cat->Id_Categoria) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('¿Deseas eliminar esta categoría?')">
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
