@extends('plantilla')

@section('seccion')
<h1>Editar nota {{$nota->id}}</h1>

    @if (session('mensaje'))
        <div class="alert alert-success">
            {{ session('mensaje') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif


<form method="POST" action="{{ route('notas.update',$nota->id) }}">
    @method('PUT')
    @csrf

    <input
    type="text"
    name="nombre"
    class="form-control mb-2"
    value="{{ $nota->nombre }}">
        @if($errors->has('nombre') )
            <div class="alert alert-danger">
                Ingresa un valor en el nombre
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    <input
    type="text"
    name="descripcion"
    class="form-control mb-2"
    value="{{ $nota->descripcion }}">
        @if($errors->has('descripcion') )
            <div class=" form-control alert alert-danger">
                Ingresa un valor en la descripcion
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    <button class="btn btn-warning btn-block" type="submit">Editar</button>
  </form>
@endsection
