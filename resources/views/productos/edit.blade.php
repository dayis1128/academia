@extends('layouts.app')

@section('titulo', 'Editar producto')

@section('contenido')
<br>
<h3 class="text-center">Editar información del Producto</h3>
{{--se utiliza el atributo enctype para poder subir archivos--}}
<form action="/cursos/{{$course->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="nombrecurso">Modifique el Nombre del Producto</label>
        <input name="nombre" id="nombrecurso" value="{{$course->nombre}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="descripcion">Modifique la Descripción del Producto</label>
        <input name="descripcion" id="descripcion" value="{{$course->descripcion}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="descripcion">Modifique la Categoria del Producto</label>
        <input name="descripcion" id="categoria" value="{{$course->categoria}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="descripcion">Modifique la Precio del Producto</label>
        <input name="descripcion" id="precio" value="{{$course->precio}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="descripcion">Modifique la Inventario del Producto</label>
        <input name="descripcion" id="inventario" value="{{$course->inventario}}" type="text" class="form-control">
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
