@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="card shadow-sm rounded border-0">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Editar Categoría</h4>
        </div>
        <div class="card-body">

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('categorias.update', $categoria->Id_Categoria) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="Nombre" class="form-label">Nombre</label>
                    <input type="text" name="Nombre" id="Nombre" class="form-control" value="{{ $categoria->Nombre }}" required>
                </div>

                <div class="mb-3">
                    <label for="Descripcion" class="form-label">Descripción</label>
                    <input type="text" name="Descripcion" id="Descripcion" class="form-control" value="{{ $categoria->Descripcion }}">
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
