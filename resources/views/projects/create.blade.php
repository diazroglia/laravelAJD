@extends('layout')

@section('title', 'Crear Proyecto')

@section('content')
<h1>Crear nuevo proyecto</h1>

@if($errors->any())
  <ul>
    @foreach($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
  </ul>
@endif

<form class="" action="{{route('projects.store')}}" method="post">
  @csrf
  <label>
    Título del proyecto <br>
    <input type="text" name="title">
  </label>
  <br>
  <label>
    URL del proyecto <br>
    <input type="text" name="url">
  </label>
  <br>
  <label>
    Descripción del proyecto <br>
    <textarea name="description" rows="8" cols="80"></textarea>
  </label>
  <br>
  <button>Guardar</button>
</form>

@endsection
