@extends('layouts.app')
@section('head')
  <h1>События</h1>
  <p>А тут одно событие.</p>
@endsection
@section('content')
  <p><img src="{{ $event->avatar }}" alt = "{{ $event->email }}"></p>
  <p>Нам передали ИД: {{ $event->id }}</p>
  Поэтому мы покажем событие №<b>{{ $event->id }}</b>:<br><br>
  <p>Название: <b>{{ $event->name }}</b></p>
  <p>Город: <b>{{ $event->city }}</b></p>
  <p>Описание: <b>{{ $event->description }}</b></p>
  <p>Когда создано: <b>{{ 
$event->whenCreated() }}</b></p>
  {{ HTML::link('/events', 'К списку') }}
@endsection
