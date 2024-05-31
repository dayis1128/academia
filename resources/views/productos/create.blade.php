@extends('layouts.app')

@section('titulo','crear producto')

@section('contenido')
    <br>
    <h3>Crear un nuevo producto</h3>
    <form action="/productos" method="post" enctype="multipart/form-data">
         @csrf
        <div class="mb-3">
          <label for="nombreproducto" class="form-label">Nombre del producto</label>
          <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción del producto</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion">
        </div>

        <div class="mb-3">
            <label for="categoria" class="form-label">Categoria del producto</label>
            <input type="text" class="form-control" id="categoria" name="categoria">
        </div>

        <div class="form-group">
            <label for="imagen">Cargar imagen</label>
            <br>
            <input name="imagen" id="imagen" type="file">
        </div>
        <br>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>


@endsection
