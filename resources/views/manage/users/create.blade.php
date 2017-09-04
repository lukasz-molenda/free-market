@extends('layouts.app')

@section('content')

@include('layouts.inc.slide-menu')

<div class="container">
     <div class="row">
       <div class="col l8 offset-l2">
         <form action="{{route('users.store')}}" method="POST">
           <h4 class="teal-text header">Utwórz nowego użytkownika</h4>
           {{csrf_field()}}

           <div class="row">
             <div class="input-field col l12">
               <input type="text" class="validate" name="name" id="name" required>
               <label for="name">Nazwa</label>
             </div>
           </div>

           <div class="row">
             <div class="input-field col l12">
               <input type="email" class="validate" name="email" id="email" required>
               <label for="email">Email:</label>
             </div>
           </div>

           <div class="row">
             <div class="input-field col l12">
               <input type="text" class="validate" name="password" id="password" v-if="!auto_password">
               <label for="password" class="label">Hasło</label>
             </div>
           </div>

           <div class="row">
             <div class="col l12">
               <input type="checkbox" name="auto_generate" id="auto_generate" v-model="auto_password">
               <label for="auto_generate" class="m-t-20">Wygeneruj automatycznie</label>
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
              <button class="waves-effect waves-light btn">Utwórz użytkownika</button>
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
         auto_password: true,
         rolesSelected: {!! old('roles') ? old('roles') : '[]' !!}
       }
     });
   </script>
@endsection
