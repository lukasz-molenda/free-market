@extends('layouts.app')

@section('content')

@include('layouts.inc.slide-menu')

    <div class="container">
      <div class="columns m-t-10">
        <div class="column">
          <h4 class="main-header deep-orange-text text-darken-4 m-t-200">Zarządzanie użytkownikami</h4>
          <div class="separator-main"></div>
        </div>
        <div class="column">
          <a href="{{route('users.create')}}" class="btn"><i class="fa fa-user-plus m-r-10"></i> Utwórz nowego użytkownika</a>
        </div>
      </div>
      <hr class="m-t-0">

      <div class="card">
        <div class="card-content">
          <table class="table is-narrow">
            <thead>
              <tr>
                <th>id</th>
                <th>Nazwa</th>
                <th>Email</th>
                <th>Data utworzenia</th>
                <th></th>
              </tr>
            </thead>

            <tbody>
              @foreach ($users as $user)
                <tr>
                  <th>{{$user->id}}</th>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->created_at->toFormattedDateString()}}</td>
                  <td class="center-align"><a class="btn orange" href="{{route('users.show', $user->id)}}">Szczegóły</a><a class="btn deep-orange" href="{{route('users.edit', $user->id)}}">Edycja</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

      {{$users->links('vendor.pagination.custom')}}
    </div>
@endsection
