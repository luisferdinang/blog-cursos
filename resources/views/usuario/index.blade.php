@extends('layouts.plantilla')

@section('title')
  Usuarios
@endsection

 @section('content')
 <h1>Usuarios</h1>
 <a href="{{route("user.create")}}" class="btn btn-primary">Crear usuario</a> <i class="bi bi-person-plus"></i>
 <br>
<br>
 <table class="table">
  <thead class= "table-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripción</th>
      <th scope="col">hash</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($user as $item)
    <tr>
      <th scope="row">{{ $item->id }}</th>
      <td><a href="{{route("user.show", $item)}}"> {{$item->name}} </a></td>
      <td>{{ $item->email }}</td>
      <td>{{ $item->password }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

{{$user->links('vendor.pagination.bootstrap-4')}}

@endsection
