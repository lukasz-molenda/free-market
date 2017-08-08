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

                    <form class="col l12 m-t-100" method="POST" action="{{ route('password.email') }}">
                      <h4 class="teal-text">Resetowanie hasła</h4>
                        {{ csrf_field() }}

                        <div class="row">
                          <div class="input-field col l12{{ $errors->has('email') ? ' has-error' : '' }}">
                              <label for="email">Adres E-mail</label>
                              <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required>

                              @if ($errors->has('email'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif
                          </div>
                        </div>

                        <div class="row">
                            <div class="col l12">
                                <button type="submit" class="waves-effect waves-light btn">
                                    Wyślij link do zresetowania hasła
                                </button>
                            </div>
                        </div>
                    </form>
        </div>
    </div>
</div>
@endsection
