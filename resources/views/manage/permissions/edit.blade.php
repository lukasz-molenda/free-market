@extends('layouts.app')

@section('content')

@include('layouts.inc.slide-menu')

  <div class="container">

    <form action="{{route('permissions.update', $permission->id)}}" method="POST">
      <h4 class="teal-text header">Edycja uprawnienia</h4>
      {{csrf_field()}}
      {{method_field('PUT')}}

      <div class="row m-t-20">
        <div class="input-field col l12">
          <label for="display_name">Nazwa (Nazwa wyświetlana)</label>
            <input type="text" class="validate" name="display_name" id="display_name" value="{{$permission->display_name}}">
        </div>
      </div>

      <div class="row">
        <div class="input-field col l12">
          <input type="text" name="name" id="name" value="{{$permission->name}}" disabled>
          <label for="name">Slug (Nie można edytować)</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col l12">
          <input type="text" name="description" id="description" value="{{$permission->description}}">
          <label for="description">Opis</label>
        </div>
      </div>

      <div class="row">
        <div class="col l12">
          <button class="waves-effect waves-light btn">Zapisz zmiany</button>
        </div>
      </div>
    </form>
  </div>
@endsection
