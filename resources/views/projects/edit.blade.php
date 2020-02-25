@extends('layout')

@section('title', 'Crear Proyecto')

@section('content')
<h1>Editar proyecto</h1>

@if($errors->any())
  <ul>
    @foreach($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
  </ul>
@endif

<form class="" action="{{route('projects.update', $project)}}" method="post">
  @csrf @method('PATCH')
  <label>
    Título del proyecto <br>
    <input type="text" name="title" value="{{$project->title}}">
  </label>
  <br>
  <label>
    URL del proyecto <br>
    <input type="text" name="url" value="{{$project->url}}">
  </label>
  <br>
  <label>
    Descripción del proyecto <br>
    <textarea name="description" rows="8" cols="80">{{$project->description}}</textarea>
  </label>
  <br>
  <button>Actualizar</button>
</form>

@endsection
