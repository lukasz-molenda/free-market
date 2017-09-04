@extends('layouts.app')

@section('content')

@include('layouts.inc.slide-menu')

<div class="container">
  <div class="row">
    <div class="col l8 offset-l2">
      <form action="{{route('permissions.store')}}" method="POST">
        <h4 class="teal-text header">Utwórz nowe uprawnienie</h4>
        {{csrf_field()}}
        <div class="row">
          <div class="col l12">
            <input type="radio" name="permission_type" value="basic" id="basic" v-model="permissionType">
            <label for="basic">Podstawowe uprawnienie</label>

            <input type="radio" name="permission_type" value="crud" id="crud" v-model="permissionType">
            <label for="crud">Uprawnienie 'CRUD'</label>
          </div>
        </div>

        <div class="row" v-if="permissionType == 'basic'">
          <div class="input-field col l12">
            <input type="text" class="validate" name="display_name" id="display_name">
            <label for="display_name">Nazwa (Nazwa wyświetlana)</label>
          </div>
        </div>

        <div class="row" v-if="permissionType == 'basic'">
          <div class="input-field col l12">
            <input type="text" class="validate" name="name" id="name">
            <label for="name">Slug</label>
          </div>
        </div>

        <div class="row" v-if="permissionType == 'basic'">
          <div class="input-field col l12">
            <input type="text" class="validate" name="description" id="description">
            <label for="description">Opis</label>
          </div>
        </div>

        <div class="row" v-if="permissionType == 'crud'">
          <div class="input-field col l12">
            <input type="text" class="validate" name="resource" id="resource" v-model="resource">
            <label for="resource">Zasób</label>
          </div>
        </div>

        <div class="row" v-if="permissionType == 'crud'">
              <div class="field">
                <input type="checkbox" value="tworzenie" v-model="crudSelected" id="create"></input>
                <label for="create">Tworzenie</label>
              </div>
              <div class="field">
                <input type="checkbox" value="odczytywanie" v-model="crudSelected" id="read"></input>
                <label for="read">Odczytywanie</label>
              </div>
              <div class="field">
                <input type="checkbox" value="uaktualnianie" v-model="crudSelected" id="update"></input>
                <label for="update">Uaktualnianie</label>
              </div>
              <div class="field">
                <input type="checkbox" value="usuwanie" v-model="crudSelected" id="delete"></input>
                <label for="delete">Usuwanie</label>
              </div>

          <input type="hidden" name="crud_selected" :value="crudSelected">

          <div class="row">
            <table class="table" v-if="resource.length >= 3">
              <thead>
                <th>Nazwa</th>
                <th>Slug</th>
                <th>Opis</th>
              </thead>
              <tbody>
                <tr v-for="item in crudSelected">
                  <td v-text="crudName(item)"></td>
                  <td v-text="crudSlug(item)"></td>
                  <td v-text="crudDescription(item)"></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="row">
          <div class="col l12">
            <button class="waves-effect waves-light btn">Utwórz uprawnienie</button>
          </div>
        </div>
      </form>
    </div>
  </div>

</div> <!-- end of .flex-container -->
@endsection

@section('scripts')
<script>
  var app = new Vue({
    el: '#app',
    data: {
      permissionType: 'basic',
      resource: '',
      crudSelected: ['tworzenie', 'odczytywanie', 'uaktualnianie', 'usuwanie']
    },
    methods: {
      crudName: function(item) {
        return item.substr(0,1).toUpperCase() + item.substr(1) + " " + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
      },
      crudSlug: function(item) {
        return item.toLowerCase() + "-" + app.resource.toLowerCase();
      },
      crudDescription: function(item) {
        return "Pozwól użytkownikowi na  " + item.toUpperCase() + " w kategorii " + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
      }
    }
  });
</script>
@endsection
