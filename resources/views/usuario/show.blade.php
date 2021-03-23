@extends('layouts.plantilla')

@section('title', 'curso ' . $user->name)


 @section('content')
 <h1>Bienvenido {{$user->name}}  </h1>
 <br>
 <a href="{{route("user.index")}}">Volver a lista de usuario</a> <br>
 <a href="{{route("user.edit", $user)}}">Editar usuario</a>
 <br>
 <br>
  <h3>{{$user->password}}</h3>
 <p><strong>{{$user->email}}</strong></p>

 <form action="{{route("cursos.destroy", $user)}}" method="POST">
    @csrf
   @method("delete")
    <button type="submit"> Eliminar

   </button>

 </form>
@endsection
