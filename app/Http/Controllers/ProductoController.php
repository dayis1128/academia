<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $product = Producto::all();
        // return $product;

        return view('productos.index', compact('product'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    return view('productos.create');
}
/**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request->all(); //con esto devuelvo toda la información
        $product = new Producto();
        $product->nombre = $request->input('nombre');
        $product->descripcion = $request->input('descripcion');
        $product->categoria = $request->input('categoria');

        if ($request->hasFile('imagen')){ //si desde ese campo viene un archivo hacer:
            $product->imagen = $request->file('imagen')->store('public/productos');
        }

        $product->save();
        return 'Guardado exitoso';
    }
    public function show(string $id)
    {
        $product = Producto::find($id);
        return view('productos.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Producto::find($id);
        return view('productos.edit',compact('product'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Producto::find($id);
        $product->fill($request->except('imagen'));
        if ($request->hasFile('imagen')){ //si desde ese campo viene un archivo hacer:
            $product->imagen = $request->file('imagen')->store('public/productos');
            $product->save();
            return 'Producto actualizado';
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


}
