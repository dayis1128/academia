<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

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

        if ($request->hasFile('imagen')){ //si desde ese campo viene un archivo hacer:
            $product->imagen = $request->file('imagen')->store('public/productos');
        }

        $product->save();
        return 'Guardado exitoso';
    }
    public function edit(string $id)
    {
        $product = Producto::find($id);
        return view('productos.edit',compact('product'));
    }
    public function destroy(string $id)
    {
        //
    }


}
