@extends('layouts/nav_mascotas')
@section ('formulario')
<h1> aqui se registran las mascotas</h1>
<form  method="post" action=" {{ route('mascotas')}}">
    @csrf

    <input type="text" name="name" placeholder="Nombre"  value ="{{old('name')}}"> <br>
    {!! $errors ->first('name','<small> :message </small><br>')!!}
    <input type="text" name="tipo_animal" id="id_tipo_animal" placeholder="tipo de animal " value ="{{old('email')}}"><br>
    {!! $errors ->first('tipo_animal','<small> :message </small><br>')!!}
    <input type="text" name="raza" id="id_raza" placeholder="raza" value="criolla" > <br>
    <input type="text" name="dueño" id="id_dueño" placeholder="dueño" value="juanito"><br>
    <button>registrar</button>
</form>

@endsection
@section('datos')
<h1> aqui se muestran las mascotas</h1>
{{-- {{$mascota}} --}}
<ul>
        @forelse ($mascota as $item)
            <li>{{$item->nombre}} <br> <small> {{$item->tipo_animal}}  </small></li>
        @empty
            <li> no hay datos</li>

        @endforelse
</ul>
@endsection
