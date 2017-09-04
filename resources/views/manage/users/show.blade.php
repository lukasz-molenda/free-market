@extends('layouts.app')

@section('content')

@include('layouts.inc.slide-menu')

  <div class="container">

      <div class="row">
        <div class="col l8 offset-l2">
          <h4 class="main-header deep-orange-text text-darken-4 m-t-200">Szczegóły użytkownika</h4>
          <div class="separator-main"></div>
      </div>
      </div>

      <div class="row">
        <div class="col l8 offset-l2">
        <a href="{{route('users.edit', $user->id)}}" class="btn"><i class="fa fa-user m-r-10"></i> Edytuj dane użytkownika</a>
      </div>
      </div>
      <div class="row">
        <div class="col l8 offset-l2">
          <label for="name" class="label">Nazwa</label>
          <p>{{$user->name}}</p>
        </div>
      </div>

        <div class="row">
          <div class="col l8 offset-l2">
            <label for="email" class="label">Email</label>
            <p>{{$user->email}}</p>
      </div>
    </div>

      <div class="row">
        <div class="col l8 offset-l2">
        <div class="field">
          <div class="field">
            <label for="email" class="label">Role</label>
            <ul>
              {{$user->roles->count() == 0 ? 'Ten użytkownik nie ma jeszcze przypisanych żadnych ról' : ''}}
              @foreach ($user->roles as $role)
                <li>{{$role->display_name}} ({{$role->description}})</li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
