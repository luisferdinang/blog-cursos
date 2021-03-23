<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Crear usuarios</h1>
    <br>
<form action="{{route("user.store")}}" method="POST">
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
    Contraseña <br>
    <input type="password" name="password" value="{{ old('password') }}" placeholder="*******">
  </label>
  @error('categoria')
  <br>
  <small>*{{$message}}</small>
  <br>
  @enderror
  <br>
  <label for="">
   Correo Electronico <br>
    <input type="email" name="email" value="{{ old('email') }}"placeholder="email@example.com">
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