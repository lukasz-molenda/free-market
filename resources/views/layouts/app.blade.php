<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav>
          <div class="nav-wrapper orange">
            <div class="container">
              <a href="{{route('/')}}" class="brand-logo deep-orange"><span class="p-l-30 p-r-30">Wolny Rynek</span></a>
              <ul class="right">
                <li><a href="{{route('news')}}">Aktualności</a></li>
                <li><a href="{{route('blogs')}}">Blogi</a></li>
                <li><a href="{{route('encyclopedia')}}" class="">Encyklopedia</a></li>
                @if(Auth::guest())
                <li class="deep-orange lighten-1"><a href="{{route('register')}}">Rejestracja</a></li>
                <li class="deep-orange"><a href="{{route('login')}}">Logowanie</a></li>
                @else
                <li class="deep-orange"><a href="{{route('logout')}}" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">Wyloguj się</a></li>
                     @include('layouts.inc.forms.logout')
                @endif
              </ul>
            </div>
          </div>
        </nav>
        @yield('content')


    </div>
    @yield('scripts')
  @include('layouts.inc.footer')

</body>
</html>
