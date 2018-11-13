@extends('layouts.app')
@section('head')
  <h1>События</h1>
  <p>Здесь создается Событие.</p>
@endsection
@section('content')
  {!! Form::open(['route' => 'events.store'], ['class' => 'form']) !!}
  <div class="form-group">
    {!! Form::label('name', 'Название события', ['class' => 'control-label']) !!}
    {!! Form::text('name', null,
        [
            'class' => 'form-control input-lg',
            'placeholder' => 'Хакинг и пицца'
          ]);
    !!}
  </div>
  <div class="form-group">
    {!! Form::label('venue', 'Компания', ['class' => 'control-label']) !!}
    {!! Form::text('venue', null,
        [
            'class' => 'form-control input-lg',
            'placeholder' => 'Peck'
          ]);
    !!}
  </div>
  <div class="form-group">
    {!! Form::label('city', 'Город', ['class' => 'control-label']) !!}
    {!! Form::text('city', null,
        [
            'class' => 'form-control input-lg',
            'placeholder' => 'Город'
          ]);
    !!}
  </div>
  <div class="form-group">
    {!! Form::label('max_attendees', 'Макс. количество участников', ['class' => 'control-label']) !!}
    {!! Form::select('max_attendees', [2, 3, 4, 5], null,
        [
            'class' => 'form-control input-lg',
            'placeholder' => 'Пошел нахуй'
          ]);
    !!}
  </div>
  <div class="form-group">
    {!! Form::label('description', 'Описание', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null,
        [
            'class' => 'form-control input-lg',
            'placeholder' => 'Описание нахуй'
          ]);
    !!}
  </div>
  <div class="form-group">
    {!! Form::submit('Создать Событие',
        [
            'class' => 'btn btn-info',
          ]);
    !!}
  </div>

  {!! Form::close() !!}

  {{ HTML::link('/events', 'К списку') }}
@endsection
