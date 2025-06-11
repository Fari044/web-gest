<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Cliente;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index()
    {
        $ventas = Venta::with('cliente')->paginate(10);
        return view('ventas.index', compact('ventas'));
    }

    public function create()
    {
        $clientes = Cliente::all();
        return view('ventas.create', compact('clientes'));
    }

    // app/Http/Controllers/VentaController.php


    public function store(Request $request)
    {
        $request->validate([
            'fkCliente' => 'required|integer',
            'total' => 'required|numeric',
        ]);

        $venta = Venta::create([
            'fkCliente' => $request->input('fkCliente'),
            'total' => $request->input('total'),
        ]);

        return redirect()->route('ventas.index')->with('success', 'Venta registrada correctamente');

    }


    public function show(Venta $venta)
    {
        return view('ventas.show', compact('venta'));
    }

    public function edit(Venta $venta)
    {
        $clientes = Cliente::all();
        return view('ventas.edit', compact('venta', 'clientes'));
    }

    public function update(Request $request, Venta $venta)
    {
        $request->validate([
            'fkCliente' => 'required|exists:clientes,id',
            'total' => 'required|numeric',
        ]);

        $venta->update($request->all());

        return redirect()->route('ventas.index')->with('success', 'Venta actualizada');
    }

    public function destroy(Venta $venta)
    {
        $venta->delete();
        return redirect()->route('ventas.index')->with('success', 'Venta eliminada');
    }
}
