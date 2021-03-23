@extends('layouts.plantilla')

@section('title')
crear curso
@endsection

@section('content')
<h1>CREA UN CURSO</h1>
<br>
<form action="{{route("cursos.store")}}" method="POST">
  @csrf
  <label for="">
    Nombre: <br>
    <input type="text" name="name" value="{{ old('name') }}" placeholder="Nombre">
  </label>
  @error('name')
  <br>
  <small><b>*{{$message}}</b></small>
  <br>
  @enderror
  <br>
  <label for="">
    Descripcion: <br>
    <textarea name="descripcion" rows="5" placeholder="descripcion" value="{{ old('descripcion') }}" ></textarea>
  </label>
  @error('descripcion')
  <br>
  <small>*{{$message}}</small>
  <br>
  @enderror
  <br>
  <label for="">
    Categoria <br>
    <input type="text" name="categoria" value="{{ old('categoria') }}">
  </label>
  @error('categoria')
  <br>
  <small>*{{$message}}</small>
  <br>
  @enderror
  <br>
  <button type="submit">enviar formulario</button>

</form>
@endsection