@extends('layouts/nav')
@section ('content')
{{-- <h1> aqui se registran usuarios</h1>
<h2> datos</h2> --}}

<h1> aqui se muestran los usuarios</h1>
@forelse ($usuario as $item)
    <form action="{{ route('usuarios.delete', $item)}}" method="POST">
        @csrf @method('DELETE')
        <p> {{$item -> nombre }}</p>
        <small> {{$item -> celular }}</small>
        <a href="{{route('user.edit', $item)}}"> editar</a>
        <button> eliminar </button>
    </form>
@empty
    <h1> esta vacio los datos </h1>
@endforelse
<form action="crear" method="get">
    <button>crear usuario</button>
</form>
@endsection
