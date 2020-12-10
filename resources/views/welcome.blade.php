@extends('plantilla')

@section('seccion')
        <h1 class="display-4">Notas</h1>

        @if ( session('mensaje') )
            <div class="alert alert-success">
                {{ session('mensaje') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <form method="POST" action="{{ route('notas.crear') }}">
            @csrf

            <input type="text" name="nombre" class="form-control mb-2" placeholder="Nombre" id="" value="{{ old('nombre') }}">
                @if($errors->has('nombre') )
                    <div class="alert alert-danger">
                        Ingresa un valor en el nombre
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            <input type="text" name="descripcion" class="form-control mb-2" placeholder="Descripcion" id="" value="{{ old('descripcion') }}">
                @if($errors->has('descripcion') )
                    <div class=" form-control alert alert-danger">
                        Ingresa un valor en la descripcion
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            <button class="btn btn-primary btn-block" type="submit">Agregar</button>
          </form>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">#id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($notas as $nota)
                <tr>
                    <th scope="row">{{$nota->id}}</th>
                    <td>
                        <a href="{{route('notas.detalle', $nota)}}">
                            {{$nota->nombre}}
                        </a>
                    </td>
                    <td>{{$nota->descripcion}}</td>
                    <td>
                        <a href="{{route('notas.editar', $nota)}}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('notas.eliminar', $nota) }}" class="d-inline" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach()
            </tbody>
        </table>
@endsection
