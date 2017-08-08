@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col l8 offset-l2">

      <form class="col l12 m-t-100" method="POST" action="{{ route('login') }}">
        <h4 class="teal-text">Logowanie</h4>
      {{ csrf_field() }}

        <div class="row">
          <div class="input-field col l12{{ $errors->has('email') ? ' has-error' : '' }}">
            <input id="email" type="email" class="validate" required name="email">
            <label for="email">Email</label>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>
        </div>

        <div class="row">
          <div class="input-field col l12{{ $errors->has('password') ? ' has-error' : '' }}">
            <input id="password" type="password" class="validate" name="password" required>
            <label for="password">Hasło</label>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </div>
        </div>

        <div class="row">
          <div class="col l12">
            <button type="submit" class="waves-effect waves-light btn">Zaloguj się</button>
          </div>
        </div>

        <div class="row">
          <div class="col l12">
            <input type="checkbox" id="remember_me" {{ old('remember') ? 'checked' : '' }}>
            <label for="remember_me">Zapamiętaj mnie</label>
          </div>
        </div>

        <div class="row">
          <a class="col l12" href="{{ route('password.request') }}">
              Zapomniałeś hasła?
          </a>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
