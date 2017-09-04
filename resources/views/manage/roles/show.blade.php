@extends('layouts.app')

@section('content')

@include('layouts.inc.slide-menu')

  <div class="container">
    <div class="col l8 offset-l2">
      <div class="row">
        <h4 class="main-header deep-orange-text text-darken-4">{{$role->display_name}}<small class="m-l-25"><em>({{$role->name}})</em></small></h4>
        <h5 class="deep-orange-text text-darken-4">{{$role->description}}</h5>
        <div class="separator-main"></div>
      </div>
      <div class="col s12 m6 l4">
        <a href="{{route('roles.edit', $role->id)}}" class="btn"><i class="fa fa-user-plus m-r-10"></i> Edytuj tę rolę</a>
      </div>
    </div>

    <div class="row">
      <div class="col s12 m6 l4">
        <div class="card grey lighten-4">
          <article class="card-content black-text">
                <h5 class="teal-text">Uprawnienia:</h5>
                <ul>
                  @foreach ($role->permissions as $r)
                    <li>{{$r->display_name}} <em class="m-l-15">({{$r->description}})</em></li>
                  @endforeach
                </ul>
          </article>
        </div>
      </div>
    </div>
  </div>
@endsection
