@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row">
      <h4 class="main-header deep-orange-text text-darken-4">Aktualności</h4>
      <div class="separator-main"></div>
      <ul class="collection m-t-20">
        <h6 class="main-header teal-text">01-07-2017</h6>
        <div class="separator-secondary"></div>
        <li class="collection-item avatar">
          <div class="row">
            <div class="col l2">
              <img src="{{asset('images/news/1.jpg')}}" alt="">
            </div>
            <div class="col l8">
              <span class="title teal-text">Wiadomość 1</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic animi, numquam, quas error omnis beatae quidem porro perspiciatis eaque provident accusamus officia sed eum dolores nesciunt odio maxime doloremque veritatis.</p>
            </div>
            <div class="col l2">
              <p><span class="secondary-content">01-07-2017<br>23:33:05</span></p>
            </div>
          </div>
        </li>
        <h6 class="main-header teal-text m-l-10 m-t-100">30-06-2017</h6>
        <div class="separator-secondary"></div>
        <li class="collection-item avatar">
          <div class="row">
            <div class="col l2">
              <img src="{{asset('images/news/2.jpg')}}" alt="">
            </div>
            <div class="col l8">
              <span class="title teal-text">Wiadomość 2</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic animi, numquam, quas error omnis beatae quidem porro perspiciatis eaque provident accusamus officia sed eum dolores nesciunt odio maxime doloremque veritatis.</p>
            </div>
            <div class="col l2">
              <p><span class="secondary-content">30-06-2017<br>11:06:29</span></p>
            </div>
          </div>
        </li>
        <li class="collection-item avatar">
          <div class="row">
            <div class="col l2">
              <img src="{{asset('images/news/3.jpg')}}" alt="">
            </div>
            <div class="col l8">
              <span class="title teal-text">Wiadomość 3</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic animi, numquam, quas error omnis beatae quidem porro perspiciatis eaque provident accusamus officia sed eum dolores nesciunt odio maxime doloremque veritatis.</p>
            </div>
            <div class="col l2">
              <p><span class="secondary-content">30-06-2017<br>13:20:00</span></p>
            </div>
          </div>
        </li>
        <h6 class="main-header teal-text m-l-10 m-t-100">29-06-2017</h6>
        <div class="separator-secondary"></div>
        <li class="collection-item avatar">
          <div class="row">
            <div class="col l2">
              <img src="{{asset('images/news/4.jpg')}}" alt="">
            </div>
            <div class="col l8">
              <span class="title teal-text">Wiadomość 4</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic animi, numquam, quas error omnis beatae quidem porro perspiciatis eaque provident accusamus officia sed eum dolores nesciunt odio maxime doloremque veritatis.</p>
            </div>
            <div class="col l2">
              <p><span class="secondary-content">29-06-2017<br>17:47:44</span></p>
            </div>
          </div>
        </li>
        <li class="collection-item avatar">
          <div class="row">
            <div class="col l2">
              <img src="{{asset('images/news/5.jpg')}}" alt="">
            </div>
            <div class="col l8">
              <span class="title teal-text">Wiadomość 5</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic animi, numquam, quas error omnis beatae quidem porro perspiciatis eaque provident accusamus officia sed eum dolores nesciunt odio maxime doloremque veritatis.</p>
            </div>
            <div class="col l2">
              <p><span class="secondary-content">29-06-2017<br>18:10:10</span></p>
            </div>
          </div>
        </li>
      </ul>
      <ul class="pagination">
        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
        <li class="deep-orange active"><a href="#!">1</a></li>
        <li class="waves-effect"><a href="#!">2</a></li>
        <li class="waves-effect"><a href="#!">3</a></li>
        <li class="waves-effect"><a href="#!">4</a></li>
        <li class="waves-effect"><a href="#!">5</a></li>
        <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
      </ul>
    </div>
  </div>



@endsection
