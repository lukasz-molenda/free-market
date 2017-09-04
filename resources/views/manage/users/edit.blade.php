@extends('layouts.app')

@section('content')

@include('layouts.inc.slide-menu')

  <div class="container">
    <div class="row">
      <div class="col l8 offset-l2">
        <form action="{{route('users.update', $user->id)}}" method="POST">
          <h4 class="teal-text header">Edytuj użytkownika</h4>
          {{method_field('PUT')}}
          {{csrf_field()}}

          <div class="row">
            <div class="input-field col l12">
              <input type="text" class="validate" name="name" id="name" value="{{$user->name}}" required>
              <label for="name">Nazwa:</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col l12">
              <input type="email" class="validate" name="email" id="email" value="{{$user->email}}" required>
              <label for="email">Email:</label>
            </div>
          </div>

          <div class="row">
            <div class="col l12">
              <h6>Hasło</h6>
              <p>
                <input class="with-gap" name="password_options" type="radio" value="keep" id="keep" checked="checked">
                <label for="keep">Nie zmieniaj hasła.</label>
              </p>

              <div class="row">
                <div class="col l12">
                  <input class="with-gap" name="password_options" type="radio" value="auto" id="auto">
                  <label for="auto">Automatycznie wygeneruj nowe hasło.</label>
                </div>
              </div>

              <div class="row">
                <div class="col l12">
                  <input class="with-gap" name="password_options" type="radio" value="manual" id="manual">
                  <label for="manual">Ręcznie ustaw nowe hasło.</label>
                  <p class="edit-user-password">
                    <input type="text" class="input" name="password" id="password" placeholder="Ręcznie ustaw nowe hasło...">
                  </p>
                </div>
              </div>

              <div class="row">
                <div class="col l12">
                  <label for="roles">Role:</label>
                  <input type="hidden" name="roles" :value="rolesSelected">
                  @foreach ($roles as $role)
                  <div class="field">
                    <input type="checkbox" value="{{$role->id}}" id="role{{$role->id}}" v-model="rolesSelected">
                     <label for="role{{$role->id}}">{{$role->display_name}}</label>
                  </div>
                @endforeach
                </div>
              </div>

              <div class="row">
                <div class="col l12">
                  <button class="waves-effect waves-light btn">Edytuj użytkownika</button>
                </div>
              </div>

            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script>
var app = new Vue({
        el: '#app',
        data: {
         password_options: 'keep',
         rolesSelected: {!! $user->roles->pluck('id') !!}
        }
      });
  </script>
@endsection
