@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <h4 class="main-header deep-orange-text text-darken-4 m-l-10 m-t-20">Wiadomości</h4>
    </div>
    <div class="separator-main"></div>
    <div class="row">
      <div class="col l4">
        <div class="card hoverable">
          <div class="card-image">
            <img src="{{asset('images/01.jpg')}}">
            <span class="card-title">Pierwsza Wiadomość</span>
          </div>
          <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.</p>
          </div>
          <div class="card-action">
            <a href="#">Czytaj dalej</a>
          </div>
        </div>
      </div>
      <div class="col l4">
        <div class="card hoverable">
          <div class="card-image">
            <img src="{{asset('images/02.jpg')}}">
            <span class="card-title">Druga Wiadomość</span>
          </div>
          <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.</p>
          </div>
          <div class="card-action">
            <a href="#">Czytaj dalej</a>
          </div>
        </div>
      </div>
      <div class="col l4">
        <div class="card hoverable">
          <div class="card-image">
            <img src="{{asset('images/03.jpg')}}">
            <span class="card-title">Trzecia Wiadomość</span>
          </div>
          <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.</p>
          </div>
          <div class="card-action">
            <a href="#">Czytaj dalej</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col l4">
        <h4 class="main-header deep-orange-text text-darken-4 m-l-10 m-t-20">Encyklopedia</h4>
      </div>
      <div class="col l4">
        <h4 class="main-header deep-orange-text text-darken-4 m-l-10 m-t-20">Blog</h4>
      </div>
    </div>
    <div class="separator-main"></div>
    <div class="row">
      <div class="col l4">
        <div class="card hoverable">
          <div class="card-image">
            <img src="{{asset('images/04.jpg')}}">
            <span class="card-title">Pierwszy Wpis</span>
          </div>
          <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.</p>
          </div>
          <div class="card-action">
            <a href="#">Czytaj dalej</a>
          </div>
        </div>
      </div>
      <div class="col l4">
        <div class="card hoverable">
          <div class="card-image">
            <img src="{{asset('images/05.jpg')}}">
            <span class="card-title">Pierwszy Wpis</span>
          </div>
          <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.</p>
          </div>
          <div class="card-action">
            <a href="#">Czytaj dalej</a>
          </div>
        </div>
      </div>
      <div class="col l4">
        <div class="card hoverable">
          <div class="card-image">
            <img src="{{asset('images/06.jpg')}}">
            <span class="card-title">Drugi Wpis</span>
          </div>
          <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.</p>
          </div>
          <div class="card-action">
            <a href="#">Czytaj dalej</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
