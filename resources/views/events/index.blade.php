@extends('layouts.app')
@section('head')
  <h1>События</h1>
  <p>Тут список событий</p>
@endsection
@section('content')
  <h1>События</h1>
  <ul>
  @forelse ($events as $event)
      <li>{!! HTML::link('events/'.$event->slug, $event->name) !!}; started at {{ $event->started_at }}</li>
  @empty
      <p>Нет ни одного события.</p>
  @endforelse
  <div class="paginator">
      {!! $events->links('vendor.pagination.bootstrap-4') !!}
  </div>
@endsection
