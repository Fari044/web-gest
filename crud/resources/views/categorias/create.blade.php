@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Crear Categoría</h4>
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

                    <form action="{{ route('categorias.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="Nombre" class="form-label">Nombre:</label>
                            <input type="text" name="Nombre" id="Nombre" class="form-control" required maxlength="50" value="{{ old('Nombre') }}">
                        </div>

                        <div class="mb-3">
                            <label for="Descripcion" class="form-label">Descripción:</label>
                            <input type="text" name="Descripcion" id="Descripcion" class="form-control" maxlength="100" value="{{ old('Descripcion') }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a href="{{ route('categorias.index') }}" class="btn btn-secondary ms-2">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
