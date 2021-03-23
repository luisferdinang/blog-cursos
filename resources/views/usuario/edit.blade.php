@extends('layouts.plantilla')

@section('title')
Editar usuario
@endsection

@section('content')
<h1>Editar usuario</h1>
<br>
<form action="{{route("user.update", $user)}}" method="POST">
    @csrf
    @method("put")
    <label for="">
      Nombre: <br>
      <input type="text" name="name" value="{{old('name', $user->name)}}" placeholder="Nombre">
    </label>
    @error('name')
    <br>
    <small><b>*{{$message}}</b></small>
    <br>
    @enderror
    <br>
    <label for="">
      Contraseña <br>
      <input type="password" name="password" value="{{ old('password', $user->password) }}" placeholder="*******">
    </label>
    @error('categoria')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
    <br>
    <label for="">
     Correo Electronico <br>
      <input type="email" name="email" value="{{ old('email', $user->email ) }}"placeholder="email@example.com">
    </label>
    @error('categoria')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
    <br>
    <button type="submit">enviar formulario</button>
  
  </form>
  </body>
  </html>
  @endsection