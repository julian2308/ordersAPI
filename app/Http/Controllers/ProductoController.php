<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entradas = Producto::where('categoria', "Entrada") -> get();
        $postres = Producto::where('categoria', "Postre") -> get();
        $principales = Producto::where('categoria', "Principal") -> get();
        $bebidas = Producto::where('categoria', "Bebida") -> get();

        return [
            'entrada' => $entradas,
            'postre' => $postres,
            'principal' => $principales,
            'bebida' => $bebidas
        ];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
