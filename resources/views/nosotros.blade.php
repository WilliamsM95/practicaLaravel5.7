@extends('plantilla')

@section('seccion')
    <h1>Nosotros: Este es mi equipo de trabajo</h1>

    @foreach($equipo as $item)
        <a href="{{ route('nosotros', $item) }}" class="h4 text-danger">{{$item}}</a><br>
    @endforeach

    @if (!empty($nombre))

        @switch($nombre)
            @case($nombre=='Ignacion')
                    <h2 class="mt-5">El nombre es: {{$nombre}}</h2>
                @break
            @case($nombre=='Juanito')
                    <h2 class="mt-5">El nombre es: {{$nombre}}</h2>
                @break
            @case($nombre=='Pedrito')
                    <h2 class="mt-5">El nombre es: {{$nombre}}</h2>
                @break

            @default

        @endswitch

    @endif
@endsection
