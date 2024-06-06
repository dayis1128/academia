@extends('layouts.app')


@section('titulo', 'Listado de productos')

@section('contenido')
<br>
<h3 class="text-center">Listado de Productos</h3>
<br>
<div class="row"> {{--ya tenemos la fila--}}
    @foreach ($product as $producto)
    <div class="col-sm"> {{--abrimos columna--}}
        <div class="card" style="width: 18rem;">
            <img style="height: 200px; width:250px; margin:20px" src="{{ Storage::url($producto->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$producto->nombre}}</h5>
              <p class="card-text">{{$producto->descripcion}}</p>
              <p class="card-text">{{$producto->categoria}}</p>
              <p class="card-text">{{$producto->precio}}</p>
              <p class="card-text">{{$producto->inventario}}</p>
              <a href="/productos/{{$producto->id}}" class="btn btn-success">Ver detalles</a>
            </div>
        </div>
    </div>
    @endforeach
</div> {{--cierro el div row--}}

@endsection
