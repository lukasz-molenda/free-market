@extends('layouts.app')

@section('content')

@include('layouts.inc.slide-menu')

  <div class="container">
    <div class="row m-t-20">
        <h1 class="title">Szczegóły uprawnienia</h1>
        <a href="{{route('permissions.edit', $permission->id)}}" class="btn"><i class="fa fa-edit m-r-10"></i> Edytuj uprawnienie</a>
    </div>
    <hr class="m-t-0">

    <div class="row">
        <div class="col s12 m6">
          <div class="card grey lighten-4">
            <div class="card-content black-text">
              <span class="card-title">{{$permission->display_name}}</strong> <small>{{$permission->name}}</span>
              <p>{{$permission->description}}</p>
            </div>
          </div>
        </div>
      </div>
  </div>
@endsection
