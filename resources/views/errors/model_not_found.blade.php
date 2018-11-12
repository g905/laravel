@extends('layouts.app')
@section('head')
    <h1>УПс</h1>
    <p>Ошибка 404</p>
@endsection
@section('content')
    <h1>Кажется, мы не можем найти ничего по вашему запросу.</h1>
    <ul>
        <li>{{ HTML::link('/', 'Главная') }}</li>
        <li>{{ HTML::link('/events', 'События') }}</li>
    </ul>
@endsection
