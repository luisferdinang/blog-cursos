@extends('layouts.plantilla')

@section('title')
Editar Curso
@endsection

@section('content')
<h1>Editar curso</h1>
<br>
<form action="{{route("cursos.update", $curso)}}" method="POST">
  @csrf
  @method("put")

  <label for="">
    Nombre: <br>
    <input type="text" name="name" value="{{old('name', $curso->name)}}">
  </label><br>
  @error('name')
  <br>
  <small>*{{$message}}</small>
  <br>
  @enderror
  <br>
  <label for="">
    Descripcion: <br>
    <textarea name="descripcion" rows="5" >{{old('descripcion', $curso->descripcion)}}</textarea>
  </label> <br>
  @error('descripcion')
  <br>
  <small>*{{$message}}</small>
  <br>
  @enderror
  <br>
  <label for="">
    Categoria <br>
    <input type="text" name="categoria" value="{{old('categoria', $curso->categoria)}}">
  </label><br>
  @error('categoria')
  <br>
  <small>*{{$message}}</small>
  <br>
  @enderror
  <br>
  <button type="submit">actualizar formulario</button>

</form>
@endsection