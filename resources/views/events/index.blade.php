@extends('layouts.app')
@section('head')
  <h1>События</h1>
  <p>Тут список событий</p>
@endsection
@section('content')
  {!! HTML::link(route('events.create'), 'Создать') !!}
  <h1>События</h1>
  <ul class="events-list">
  @forelse ($events as $event)
      <li>
        <div class="pane">
          <div class="avatar">
            <img src="{{ $event->avatar }}" alt="{{ $event->email }}">
          </div>
          <div class="uname">
            {!! HTML::link('events/'.$event->slug, $event->name) !!}
          </div>
        </div>
        </li>
  @empty
      <p>Нет ни одного события.</p>
  @endforelse
  <div class="paginator">
      {!! $events->links('vendor.pagination.bootstrap-4') !!}
  </div>
@endsection
