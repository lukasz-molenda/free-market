@extends('layouts.app')

@section('content')

@include('layouts.inc.slide-menu')

<div class="container">
  <div class="row">
    <h4 class="main-header deep-orange-text text-darken-4">Blogi</h4>
    <div class="separator-main"></div>
  </div>
  <div class="row">
        <div class="col l12">
          <div class="card orange">
            <div class="card-content white-text">
              <span class="card-title">Przeglądaj blogerów</span>
              <p>
                <a href="" class="white-text alphabet-link"><span class="alphabet">A</span></a>
                <a href="" class="white-text alphabet-link"><span class="alphabet">B</span></a>
                <a href="" class="white-text alphabet-link"><span class="alphabet">C</span></a>
                <a href="" class="white-text alphabet-link"><span class="alphabet">D</span></a>
                <a href="" class="white-text alphabet-link"><span class="alphabet">E</span></a>
                <a href="" class="white-text alphabet-link"><span class="alphabet">F</span></a>
                <a href="" class="white-text alphabet-link"><span class="alphabet">G</span></a>
                <a href="" class="white-text alphabet-link"><span class="alphabet">H</span></a>
                <a href="" class="white-text alphabet-link"><span class="alphabet">I</span></a>
                <a href="" class="white-text alphabet-link"><span class="alphabet">J</span></a>
                <a href="" class="white-text alphabet-link"><span class="alphabet">K</span></a>
                <a href="" class="white-text alphabet-link"><span class="alphabet">L</span></a>
                <a href="" class="white-text alphabet-link"><span class="alphabet">Ł</span></a>
                <a href="" class="white-text alphabet-link"><span class="alphabet">M</span></a>
                <a href="" class="white-text alphabet-link"><span class="alphabet">N</span></a>
                <a href="" class="white-text alphabet-link"><span class="alphabet">O</span></a>
                <a href="" class="white-text alphabet-link"><span class="alphabet">P</span></a>
                <a href="" class="white-text alphabet-link"><span class="alphabet">R</span></a>
                <a href="" class="white-text alphabet-link"><span class="alphabet">S</span></a>
                <a href="" class="white-text alphabet-link"><span class="alphabet">T</span></a>
                <a href="" class="white-text alphabet-link"><span class="alphabet">U</span></a>
                <a href="" class="white-text alphabet-link"><span class="alphabet">W</span></a>
                <a href="" class="white-text alphabet-link"><span class="alphabet">Z</span></a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <h4 class="main-header deep-orange-text text-darken-4">Najpopularniejsze wpisy</h4>
        <div class="separator-secondary-en"></div>
      </div>
      <div class="row">
        <div class="col l4">
          <div class="card hoverable">
            <div class="card-image">
              <img src="{{asset('images/blogs/01.jpg')}}">
              <span class="card-title card-blog">Pierwszy Wpis<span class="blog-author">Autor 1<br>27-06-2016</span></span>

            </div>
            <div class="card-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, fuga, odio. Nemo dolorum obcaecati ipsam asperiores, officiis optio mollitia qui.</p>
            </div>
            <div class="card-action">
              <a href="#">Czytaj dalej</a>
            </div>
          </div>
        </div>
        <div class="col l4">
          <div class="card hoverable">
            <div class="card-image">
              <img src="{{asset('images/blogs/02.jpg')}}">
              <span class="card-title card-blog">Drugi Wpis<span class="blog-author">Autor 2<br>07-07-2017</span></span>
            </div>
            <div class="card-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, deserunt distinctio aliquid laboriosam. Sequi quia praesentium nostrum quasi debitis vero.</p>
            </div>
            <div class="card-action">
              <a href="#">Czytaj dalej</a>
            </div>
          </div>
        </div>
        <div class="col l4">
          <div class="card hoverable">
            <div class="card-image">
              <img src="{{asset('images/blogs/03.jpg')}}">
              <span class="card-title card-blog">Trzeci Wpis<span class="blog-author">Autor 3<br>03-05-2015</span></span>
            </div>
            <div class="card-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae doloremque quos amet cumque sed tempore architecto dolorum illum neque sequi.</p>
            </div>
            <div class="card-action">
              <a href="#">Czytaj dalej</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <h4 class="main-header deep-orange-text text-darken-4">Ostatnie wpisy</h4>
        <div class="separator-secondary-en"></div>
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
