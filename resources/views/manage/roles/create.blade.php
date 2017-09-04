@extends('layouts.app')

@section('content')

@include('layouts.inc.slide-menu')

  <div class="container">
    <div class="row">
      <div class="col l8 offset-l2">
    <form action="{{route('roles.store')}}" method="POST">
      <h4 class="main-header deep-orange-text text-darken-4">Utwórz nową rolę</h4>
      <div class="separator-main"></div>
      {{ csrf_field() }}

          <div class="row">
            <article class="col s12 m6 l12">
              <div class="card grey lighten-4">
                <div class="card-content black-text">
                  <h4 class="teal-text">Szczegóły roli:</h4>
                  <div class="input-field m-t-30">
                    <input type="text" class="validate" name="display_name" value="{{old('display_name')}}" id="display_name">
                    <label for="display_name">Nazwa (zrozumiała dla człowieka)</label>
                  </div>
                  <div class="input-field">
                    <input type="text" class="validate" name="name" value="{{old('name')}}" id="name">
                    <label for="name">Slug (Nie można edytować)</label>
                  </div>
                  <div class="input-field">
                      <input type="text" class="validate" value="{{old('description')}}" id="description" name="description">
                      <label for="description">Opis</label>
                  </div>
                  <input type="hidden" :value="permissionsSelected" name="permissions">
                </div>
              </div>
            </article>
          </div>


      <div class="row">
        <div class="col s12 m6 l12">
          <div class="card grey lighten-4">
            <article class="card-content black-text">
                  <h4 class="teal-text">Uprawnienia:</h4>
                    @foreach ($permissions as $permission)
                      <div class="field">
                        <input type="checkbox"  v-model="permissionsSelected" value="{{$permission->id}}" id="perm{{$permission->id}}">
                        <label for="perm{{$permission->id}}">{{$permission->display_name}} <em>({{$permission->description}})</em></label>
                      </div>
                    @endforeach
            </article>
          </div>
          <div class="row">
            <div class="col l12">
              <button class="waves-effect waves-light btn">Utwórz nową rolę</button>
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
      permissionsSelected: []
    }
  });
  </script>
@endsection
