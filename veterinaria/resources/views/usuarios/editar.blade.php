@extends('layouts/nav')
@section ('content')
{{--
<h2> datos</h2> --}}
<h1> aqui se registran usuarios</h1>
<form action="{{ route('crear_usuario')}}" method="POST">
    @csrf
    <input type="text" name="nombre" placeholder="nombre">
    <input type="number" name="celular " placeholder="celular">
    <button> registrar</button>

</form>

@endsection
