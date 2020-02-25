@extends('layout')

@section('title', 'Portafolio')

@section('content')
<h1>Portafolio</h1>
<a href="{{route('projects.create')}}">Crear Proyecto</a>
<ul>
    @forelse ($projects as $project)
      <li><a href="{{route('projects.show', $project)}}"> {{$project->title }}</a>

          {{-- <br>
           <small>{{$projectItem->description}}</small><br>
           <small>{{$projectItem->updated_at->diffForHumans()}}</small> --}}
           {{-- Librería carbon / formateo de fechas --}}
      </li>
    @empty
      <li>No hay elementos para mostrar</li>
    @endforelse
    {{$projects->links()}}
</ul>
@endsection
