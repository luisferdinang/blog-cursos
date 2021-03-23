@extends('layouts.plantilla')

@section('title')
  cursos
@endsection

 @section('content')
 <h1>Esta es la pagina para hacer cursos</h1>
 <a href="{{route("cursos.create")}}">CREAR CURSO</a> <br>

 <ul>
   @foreach ($cursos as $curso)
  <li>
   <a href="{{route("cursos.show", $curso)}}"> {{$curso->name}} </a>
   
  </li>
   @endforeach

 </ul>

 {{$cursos->links()}}
@endsection
