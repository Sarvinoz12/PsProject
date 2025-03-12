@extends('Layot.master')
@section('content')

 <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section long_section px-0">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
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
            <ul class="navbar-nav ">
              <li class="nav-item ">
                <a class="nav-link" href="index.html">Asosiy <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html"> Biz haqimizda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="furniture.html">Xizmatlar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.html">Psixalogik test</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="contact.html">Bog'lanish</a>
              </li>
            </ul>
          </div>
          <div class="quote_btn-container">

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

  <!-- contact section -->
  <section class="contact_section  long_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <div class="heading_container">
              <h2>
                Bog'lanish
              </h2>
            </div>
            <form action="">
              <div>
                <input type="text" placeholder="Ism" />
              </div>
              <div>
                <input type="text" placeholder="Raqam" />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Xabar" />
              </div>
              <div class="btn_box">
                <button>
                  Jo'natish
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- info section -->
  <section class="info_section long_section">

    <div class="container">
      <div class="contact_nav">
        <a href="">
          <i class="fa fa-phone" aria-hidden="true"></i>
          <span>
            Tel : +998 88 601 88 55
          </span>
        </a>
        <a href="">
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <span>
            Email : sarvinozrazzaqberdiyeva@gamil.com
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
                Tezkor havolalar
              </h4>
              <div class="info_links_menu">
                <a class="" href="index.html">Asosiy <span class="sr-only">(current)</span></a>
                <a class="" href="about.html"> Biz haqimizda</a>
                <a class="" href="furniture.html">Xizmatlar</a>
                <a class="" href="blog.html">Psixalogik test</a>
                <a class="" href="contact.html">Bog'lanish</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mx-auto">
            <div class="info_post">
              <h5>
                INSTAGRAM galereyasi
              </h5>
              <div class="post_box">
                <div class="img-box">
                  <img src="images/individual..jpg" alt="">
                </div>
                <div class="img-box">
                  <img src="images/oilaviykonsul.jpg" alt="">
                </div>
                <div class="img-box">
                  <img src="images/onlayn2.jpg" alt="">
                </div>
                <div class="img-box">
                  <img src="images/bolalarucun.jpg" alt="">
                </div>
                <div class="img-box">
                  <img src="images/yakka.jpg" alt="">
                </div>
                <div class="img-box">
                  <img src="images/guruh....jpg" alt="">
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
                <input type="text" placeholder="Enter Your Email" />
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
  <!-- end info_section -->



@endsection