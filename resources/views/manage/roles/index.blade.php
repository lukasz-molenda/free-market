@extends('layouts.app')

@section('content')

@include('layouts.inc.slide-menu')

  <div class="container">
    <div class="row">
      <div class="col l8 offset-l2">
        <h4 class="main-header deep-orange-text text-darken-4">Zarządzaj rolami</h4>
        <div class="separator-main"></div>
        <a href="{{route('roles.create')}}" class="btn"><i class="fa fa-user-plus m-r-10"></i> Utwórz nową rolę</a>

      @foreach ($roles as $role)
          <div class="row">
            <article class="col s12 m6 l12">
              <div class="card grey lighten-4">
                <div class="card-content black-text">
                  <h4 class="teal-text">{{$role->display_name}}</h4>
                  <h5 class="teal-text"><em>{{$role->name}}</em></h5>
                  <p>
                    {{$role->description}}
                  </p>
                </div>

                <div class="row">
                  <article class="col s12 m6 l12">
                    <a href="{{route('roles.show', $role->id)}}" class="waves-effect waves-light btn m-l-20 m-b-20">Szczegóły</a>
                    <a href="{{route('roles.edit', $role->id)}}" class="waves-effect waves-light btn m-b-20">Edycja</a>
                  </article>
                </div>
              </div>
            </article>
          </div>
      @endforeach
    </div>
    </div>
  </div>
@endsection
