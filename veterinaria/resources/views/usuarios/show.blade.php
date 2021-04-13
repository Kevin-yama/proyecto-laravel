@extends('layouts/nav')
@section('title', 'show '.$usuario)
@section ('content')
{{-- <h1> aqui se registran usuarios</h1>
<h2> datos</h2> --}}
<h1> aqui se muestran el usuario {{$usuario}} </h1>

@endsection
