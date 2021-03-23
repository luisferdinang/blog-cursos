@extends('layouts.plantilla')

@section('title')
Contactanos
@endsection

@section('content')
<h1>Dejanos un mensaje</h1>

<form action="{{route("contactanos.store")}}" method="POST">

    @csrf
    <label>
        nombre:
        <br>
        <input type="text" name="name">
    </label>
    <br>
    @error('name')
    <br>
    <small><b>*{{$message}}</b></small>
    <br>
    @enderror

    <label>
        Correo:
        <br>
        <input type="text" name="correo">
    </label>
    <br>
    @error('correo')
    <br>
    <small><b>*{{$message}}</b></small>
    <br>
    @enderror
    <label>
        Mensaje:
        <br>
        <textarea name="mensaje" rows="4"></textarea>
    </label>
    <br>
    @error('mensaje')
    <br>
    <small><b>*{{$message}}</b></small>
    <br>
    @enderror

    <button type="submit">Enviar mensaje </button>
</form>
@if (session('info'))
<script>
    alert("{{session('info')}}")
</script>
      
@endif


@endsection