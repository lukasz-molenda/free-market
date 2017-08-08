@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col l8 offset-l2">
                    <form class="col l12 m-t-100" method="POST" action="{{ route('register') }}">
                      <h4 class="teal-text">Rejestracja</h4>
                        {{ csrf_field() }}

                        <div class="row">
                          <div class="input-field col l12{{ $errors->has('name') ? ' has-error' : '' }}">
                            <input id="name" type="text" class="validate" name="name" value="{{ old('name') }}" required>
                            <label for="name">Nazwa użytkownika</label>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>

                        <div class="row">
                          <div class="input-field col l12{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required>
                            <label for="email">E-mail</label>
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
                          <div class="input-field col l12">
                            <input id="password-confirm" type="password" class="validate" name="password-confirmation" required>
                            <label for="password-confirm">Potwierdź Hasło</label>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col l12">
                            <button type="submit" class="waves-effect waves-light btn">Zarejestruj się</button>
                          </div>
                        </div>
                    </form>
        </div>
    </div>
</div>
@endsection
