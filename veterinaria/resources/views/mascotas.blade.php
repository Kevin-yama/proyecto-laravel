@extends('layouts/nav')
@section ('content')
<h1> aqui se registran las mascotas</h1>
<h2> datos</h2>
<h1> aqui se muestran las mascotas</h1>
<ul>
        @forelse ($mascota as $item)
            <li>{{$item['nombre']}} <small> {{$loop-> last ? 'es el ultimo' : ''}} </small></li>
        @empty
            <li> no hay datos</li>

        @endforelse



</ul>




@endsection
