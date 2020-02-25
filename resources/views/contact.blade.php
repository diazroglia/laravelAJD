@extends('layout')

@section('title', 'Contact')

@section('content')
<h1>Contact</h1>

<!-- @if($errors->any())

    @foreach($errors->all() as $error)
      <p>{{$error}}</p>
    @endforeach

@endif -->

<form action="{{route('messages.store')}}" method="post">
    @csrf
    <input name="name" placeholder="Nombre..." value="{{old('name')}}"><br>
    {!! $errors->first('name','<small>:message</small><br>')!!}

    <input name="email" placeholder="Email..." value="{{old('email')}}"><br>
    {!! $errors->first('email','<small>:message</small><br>')!!}

    <input name="subject" placeholder="Asunto..." value="{{old('subject')}}"><br>
    {!! $errors->first('subject','<small>:message</small><br>')!!}

    <input name="content" placeholder="MEnsaje..." value="{{old('content')}}"><br>
    {!! $errors->first('content','<small>:message</small><br>')!!}

    <button>Enviar</button>
</form>
@endsection
