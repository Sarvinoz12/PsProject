<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="{{asset('images/fevicon.png')}}" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Ruhoniyat</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

  <!-- font awesome style -->
  <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('css/responsive.css')}}" rel="stylesheet" />

</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section long_section px-0">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="{{route("index.page")}}">
          <span>
            Ruhoniyat
          </span>
        </a>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav  ">
              <li class="nav-item ">
                <a class="nav-link" href="{{route("index.page")}}">Asosiy <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{route('about.page')}}"> Biz haqimizda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('furn.page')}}">Xizmatlar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('blog.page')}}">Mutaxasislar</a>
              </li>
                @auth()
              <li class="nav-item">
                <a class="nav-link" href="{{route('price.page')}}">Narxlar</a>
              </li>
                @endauth
              <li class="nav-item">
                <a class="nav-link" href="{{route('cantact.page')}}">Bog'lanish</a>
              </li>
            </ul>

          </div>
            <div class="quote_btn-container">
                @if(Auth::check())
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span>
                    {{ Auth::user()->name }}
                </span>
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="{{route('profile.edit')}}">Profil</a>
                            <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Chiqish
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                @else
                    <a href="{{ route('login') }}">
                        <span>Login</span>
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </a>
                @endif
            </div>


            <form class="form-inline">
              <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>

          </div>
        </div>
      </nav>
    </header>

    <!-- end header section -->
  </div>

@yield('content')


  <!-- jQery -->
  <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
  <!-- bootstrap js -->
  <script src="{{asset('js/bootstrap.js')}}"></script>
  <!-- custom js -->
  <script src="{{asset('js/custom.js')}}"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->
  <section class="info_section long_section">

    <div class="container">
      <div class="contact_nav">
        <a href="">
          <i class="fa fa-phone" aria-hidden="true"></i>
          <span>
            Tel: +998 88 601 88 55
          </span>
        </a>
        <a href="">
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <span>
            Email : sarvinozrazzaqberdiyeva@gmail.com
          </span>
        </a>
        <a href="">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <span>
          Joylashuv
          </span>
        </a>
      </div>

      <div class="info_top ">
        <div class="row ">
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="info_links">
              <h4>
               TEZKOR havolalar
              </h4>
              <div class="info_links_menu">
                <a class="" href="{{route('index.page')}}">Asosiy <span class="sr-only">(current)</span></a>
                <a class="" href="{{route('about.page')}}"> Biz haqimizda</a>
                <a class="" href="{{route('furn.page')}}">Xizmatlar</a>
                <a class="" href="{{route('blog.page')}}">Psixalogik test</a>
                <a class="" href="{{route('cantact.page')}}">Bog'lanish</a>
              </div>
            </div>

          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mx-auto">
            <div class="info_post">
              <h5>
                Instagram galereyasi
              </h5>
              <div class="post_box">
                <div class="img-box">
                  <img src="{{asset('images/individual..jpg')}}" alt="">
                </div>
                <div class="img-box">
                  <img src="{{asset('images/oilaviykonsul.jpg')}}" alt="">
                </div>
                <div class="img-box">
                  <img src="{{asset('images/onlayn2.jpg')}}" alt="">
                </div>
                <div class="img-box">
                  <img src="{{asset('images/yakka.jpg')}}" alt="">
                </div>
                <div class="img-box">
                  <img src="{{asset('images/bolalarucun.jpg')}}" alt="">
                </div>
                <div class="img-box">
                  <img src="{{asset('images/guruh....jpg')}}" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info_form">
              <h4>
                Bizga obuna bo'ling
              </h4>
              <form action="">
                <input type="text" placeholder="Emailingizni kiriting" />
                <button type="submit">
                Obuna bo'lish
                </button>
              </form>
              <div class="social_box">
                <a href="">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>
