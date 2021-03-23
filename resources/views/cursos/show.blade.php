@extends('layouts.plantilla')

@section('title', 'curso ' . $curso->name)


 @section('content')
 <h1>Esto es un curso de {{$curso->name}}  </h1>
 <br>
 <a href="{{route("cursos.index")}}">Volver a cursos</a> <br>
 <a href="{{route("cursos.edit", $curso)}}">Editar curso</a>
 <br>
 <br>
 <p><strong>Categoria:</strong> {{$curso->categoria}}</p>
 <p><strong>{{$curso->descripcion}}</strong></p>

 <form action="{{route("cursos.destroy", $curso)}}" method="POST">
    @csrf
   @method("delete")
    <button type="submit"> Eliminar

   </button>

 </form>
@endsection



