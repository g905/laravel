@extends('layouts.app')
@section('head')
  <h1>События</h1>
  <p>А тут одно событие.</p>
@endsection
@section('content')
  <p>Нам передали ИД: {{ $event->id }}</p>
  Поэтому мы покажем событие №<b>{{ $event->id }}</b>:<br><br>
  <p>Название: <b>{{ $event->name }}</b></p>
  <p>Город: <b>{{ $event->city }}</b></p>
  <p>Описание: <b>{{ $event->description }}</b></p>

  {{ HTML::link('/events', 'К списку') }}
@endsection
