<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {!! HTML::style('css/app.css') !!}
  {!! HTML::style('https://fonts.googleapis.com/css?family=Didact+Gothic') !!}
  <title>Новое</title>
</head>
<body>
  <header>

    <nav class="top-nav">
      <ul>
        @if (Route::current()->getName() == 'index')
            <li class="active">Главная</li>
        @else
            <li><a href="{{ route('index') }}">Главная</a></li>
        @endif

        @foreach ([
            'events'=>'События',
            'locations'=>'Места',
            'languages'=>'Языки',
            'maps'=>'Карты',
            'about'=>'О проекте',
            'contact'=>'Контакты',
            ] as $key => $route)
            @if (Route::current()->getName() == $key.'.index')
                <li class="active">{{ $route }}</li>
            @else
                <li><a href="{{ route($key.'.index') }}">{{ $route }}</a></li>
            @endif
        @endforeach
      </ul>
    </nav>
    <div class="header-label">
      @yield('head')
    </div>
  </header>
  <div class="main">
    @include('flash::message')
    @yield('content')
  </div>

    @section('footer')
        <footer>
            footer
        </footer>
    @show
</body>
</html>
