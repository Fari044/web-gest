<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VentaController;

use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Cliente;
use App\Models\Venta;


// Route::resource('categorias', CategoriaController::class);
// Route::resource('productos', ProductoController::class);
// Route::resource('clientes', ClienteController::class);
// Route::resource('ventas', VentaController::class);
// Route::resource('detalleventas', DetalleVentaController::class);

Route::get('/', function () {
if (Auth::check()) {
        return redirect()->route('dashboard');
    }
    $categorias = Categoria::take(10)->get();
    $productos = Producto::take(10)->get();
    $clientes = Cliente::take(10)->get();
    $ventas = Venta::take(10)->get();
    

    return view('home', compact('categorias', 'productos', 'clientes', 'ventas'));
});

Route::middleware(['auth'])->group(function () {
    Route::resource('categorias', CategoriaController::class);
    Route::resource('productos', ProductoController::class);
    Route::resource('clientes', ClienteController::class);
    Route::resource('ventas', VentaController::class);
    
     
   Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
