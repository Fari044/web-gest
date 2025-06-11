@extends('layouts.app')

@section('content')
<style>
    .bg-custom-purple {
        background-color: #7c3aed;
    }
    .text-custom-purple {
        color: #7c3aed;
    }
    .hover-bg-custom-purple-darker:hover {
        background-color: #6d28d9;
    }
</style>

<div style="max-width: 1000px; margin: 0 auto; padding: 1rem;">
    <div style="display: flex; flex-wrap: wrap; align-items: center; gap: 1rem; justify-content: center;">
        <div style="flex: 1 1 300px; max-width: 600px; padding: 0.5rem;">
            <h1 style="font-size: 2.5rem; font-weight: 800; color: #7c3aed; line-height: 1.2;">
                Bienvenido de <br style="display:none; /* para pantallas pequeñas */"/> nuevo <span style="color: #444;">{{ Auth::user()->name }}</span>!
            </h1>
            <p style="margin-top: 1rem; color: #555; font-size: 1.1rem;">
                Comienza a registrar los productos y ventas de tu negocio.
            </p>
            <a href="{{ route('productos.index') }}" 
               style="display: inline-block; margin-top: 2rem; padding: 0.75rem 2rem; background-color: #7c3aed; color: white; font-weight: 600; border-radius: 0.5rem; text-decoration: none; transition: background-color 0.3s ease;">
               Explorar
            </a>
        </div>
        <div style="flex: 1 1 300px; max-width: 400px; position: relative; padding: 0.5rem;">
            <div style="position: absolute; top: -30px; left: -30px; width: 120px; height: 120px; background-color: #7c3aed; border-radius: 1rem; opacity: 0.75; transform: rotate(12deg);"></div>
            <div style="position: absolute; bottom: -40px; right: -40px; width: 150px; height: 220px; background-color: #7c3aed; border-radius: 1rem; opacity: 0.75; transform: rotate(-6deg);"></div>
            <div style="position: relative; background: white; padding: 0.5rem; border-radius: 1rem; box-shadow: 0 8px 16px rgba(0,0,0,0.1);">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuD9vaGUyaNGbPF9v3QkTlWZ3II_K05xBPGFrH7uvD5j_yUZieZ9T9Tb6wD7lFK6zY-3WiSXKF71pJwGfbzA1tNXqgs6RGTXKHHfhkZ06IhUJm3Nbc_kdJQV2_6WGWGb8FPk1D8Ogr5fj3M5Gwgb657kq4MxEVmNpGu0ftr_7zAM8GHGC_cC4gBnoJSSC9ycOE2f5rQJIykDB_YNHLQA8Gt9QAYzIgqq5ETK8kt3VlTkiFj2NYXUhvYFegYqHaIoQzhcxv_GroTMEgNY"
                    alt="Ilustración de personas gestionando inventario en un negocio"
                    style="width: 100%; height: auto; border-radius: 0.75rem; object-fit: cover;">
            </div>
        </div>
    </div>
</div>
@endsection
