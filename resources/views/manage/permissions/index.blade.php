@extends('layouts.app')

@section('content')

@include('layouts.inc.slide-menu')

  <div class="container">
    <div class="columns m-t-10">
        <h4 class="main-header deep-orange-text text-darken-4">Zarządzanie uprawnieniami</h4>
        <div class="separator-main"></div>
        <a href="{{route('permissions.create')}}" class="btn"><i class="fa fa-user-plus m-r-10"></i> Utwórz nowe uprawnienie</a>
    </div>

    <div class="row">
      <div class="col s12 m6 l12">
        <div class="card grey lighten-4">
          <div class="card-content black-text">
        <table class="table is-narrow">
          <thead>
            <tr>
              <th>Nazwa</th>
              <th>Slug</th>
              <th>Opis</th>
              <th></th>
            </tr>
          </thead>

          <tbody>
            @foreach ($permissions as $permission)
              <tr>
                <th>{{$permission->display_name}}</th>
                <td>{{$permission->name}}</td>
                <td>{{$permission->description}}</td>
                <td class="center-align"><a class="btn orange" href="{{route('permissions.show', $permission->id)}}">Szczegóły</a><a class="btn deep-orange" href="{{route('permissions.edit', $permission->id)}}">Edycja</a></td>
              </tr>
            @endforeach
          </tbody>
        </div>
        </table>
        </div>

      </div>
    </div>
  </div>
@endsection
