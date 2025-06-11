@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Crear Nuevo Producto</h4>
                </div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <h6>Se encontraron los siguientes errores:</h6>
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('productos.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="Nombre" class="form-label">Nombre</label>
                            <input type="text" name="Nombre" id="Nombre" class="form-control" value="{{ old('Nombre') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="Descripcion" class="form-label">Descripción</label>
                            <textarea name="Descripcion" id="Descripcion" class="form-control" rows="3">{{ old('Descripcion') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="Precio" class="form-label">Precio</label>
                            <input type="number" name="Precio" id="Precio" class="form-control" step="0.01" value="{{ old('Precio') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="Cantidad" class="form-label">Cantidad</label>
                            <input type="number" name="Cantidad" id="Cantidad" class="form-control" value="{{ old('Cantidad') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="fkCategoria" class="form-label">Categoría</label>
                            <select name="fkCategoria" id="fkCategoria" class="form-select" required>
                                <option value="">Seleccione una categoría</option>
                                @foreach ($categorias as $categoria)
                                    <option value="{{ $categoria->Id_Categoria }}" {{ old('fkCategoria') == $categoria->Id_Categoria ? 'selected' : '' }}>
                                        {{ $categoria->Nombre }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('productos.index') }}" class="btn btn-secondary">
                                Cancelar
                            </a>
                            <button type="submit" class="btn btn-primary">
                                Guardar Producto
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
