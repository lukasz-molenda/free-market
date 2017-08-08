@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col l8 offset-l2">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="col l12 m-t-100" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row">
                          <div class="input-field col l12{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="validate" name="email" value="{{ $email or old('email') }}" required autofocus>
                            <label for="email">Adres Email</label>
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
                          <div class="input-field col l12{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <input id="password-confirm" type="password" class="validate" name="password_confirmation" required>
                            <label for="password-confirm">Potwierdź hasło</label>
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>

                        <div class="row">
                          <div class="col l12">
                            <button type="submit" class="waves-effect waves-light btn">Zresetuj hasło</button>
                          </div>
                        </div>

                    </form>
        </div>
    </div>
</div>
@endsection
