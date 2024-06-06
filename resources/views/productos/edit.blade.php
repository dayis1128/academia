@extends('layouts.app')

@section('titulo', 'Editar producto')

@section('contenido')
<br>
<h3 class="text-center">Editar información del Producto</h3>
{{--se utiliza el atributo enctype para poder subir archivos--}}
<form action="/productos/{{$product->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="nombreproducto">Modifique el Nombre del Producto</label>
        <input name="nombre" id="nombreproducto" value="{{$product->nombre}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="descripcion">Modifique la Descripción del Producto</label>
        <input name="descripcion" id="descripcion" value="{{$product->descripcion}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="categoria">Modifique la Descripción del Producto</label>
        <input name="categoria" id="categoria" value="{{$product->categoria}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="imagen">Cargar nueva imagen</label>
        <br>
        <input name="imagen" id="imagen" type="file">
    </div>
    <br>
    <button type="submit" class="btn btn-success">Actualizar</button>
</form>

@endsection
