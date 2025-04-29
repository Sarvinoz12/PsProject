@extends('Layot.master')

@section('content')




  <!-- blog section -->

  <section class="blog_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Mutaxasislar
        </h2>
      </div>
      <div class="row">
          @foreach($psixologs as $psixlog)

        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="{{asset('storage/'.$psixlog->image)}}" alt="">
            </div>
            <div class="detail-box">
              <h6>
                <b>Name: {{$psixlog->name}}</b>
              </h6>
              <p>
                <b>Tajribasi: {{$psixlog->tajriba}}</b>
                  <br>
                <b>Tajribasi: {{$psixlog->spes}}</b>
              </p>
                <a href="{{route('booking.form',$psixlog->id)}} ">Kursga yozilish</a>
                <a href="">Habar yuborish</a>
            </div>
          </div>
        </div>

          @endforeach
      </div>
    </div>
  </section>

  <!-- end blog section -->

{{--  <!-- info section -->--}}
{{--  <section class="info_section long_section">--}}

{{--    <div class="container">--}}
{{--      <div class="contact_nav">--}}
{{--        <a href="">--}}
{{--          <i class="fa fa-phone" aria-hidden="true"></i>--}}
{{--          <span>--}}
{{--            Tel : +998 88 601 88 55--}}
{{--          </span>--}}
{{--        </a>--}}
{{--        <a href="">--}}
{{--          <i class="fa fa-envelope" aria-hidden="true"></i>--}}
{{--          <span>--}}
{{--            Email : sarvinozrazzaqberdiyeva@gmail.com--}}
{{--          </span>--}}
{{--        </a>--}}
{{--        <a href="">--}}
{{--          <i class="fa fa-map-marker" aria-hidden="true"></i>--}}
{{--          <span>--}}
{{--            Joylashuv--}}
{{--          </span>--}}
{{--        </a>--}}
{{--      </div>--}}

{{--      <div class="info_top ">--}}
{{--        <div class="row ">--}}
{{--          <div class="col-sm-6 col-md-4 col-lg-3">--}}
{{--            <div class="info_links">--}}
{{--              <h4>--}}
{{--                Tezkor havolalar--}}
{{--              </h4>--}}
{{--              <div class="info_links_menu">--}}
{{--                <a class="" href="index.html">Asosiy <span class="sr-only">(current)</span></a>--}}
{{--                <a class="" href="about.html"> Biz haqimizda</a>--}}
{{--                <a class="" href="furniture.html">Xizmatlar</a>--}}
{{--                <a class="" href="blog.html">Psixalogik test</a>--}}
{{--                <a class="" href="contact.html">Bog'lanish</a>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="col-sm-6 col-md-4 col-lg-3 mx-auto">--}}
{{--            <div class="info_post">--}}
{{--              <h5>--}}
{{--                INSTAGRAM galereyasi--}}
{{--              </h5>--}}
{{--              <div class="post_box">--}}
{{--                <div class="img-box">--}}
{{--                  <img src="images/individual..jpg" alt="">--}}
{{--                </div>--}}
{{--                <div class="img-box">--}}
{{--                  <img src="images/onlayn2.jpg" alt="">--}}
{{--                </div>--}}
{{--                <div class="img-box">--}}
{{--                  <img src="images/oilaviykonsul.jpg" alt="">--}}
{{--                </div>--}}
{{--                <div class="img-box">--}}
{{--                  <img src="images/bolalarucun.jpg" alt="">--}}
{{--                </div>--}}
{{--                <div class="img-box">--}}
{{--                  <img src="images/yakka.jpg" alt="">--}}
{{--                </div>--}}
{{--                <div class="img-box">--}}
{{--                  <img src="images/guruh....jpg" alt="">--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="col-md-4">--}}
{{--            <div class="info_form">--}}
{{--              <h4>--}}
{{--                Bizga obuna bo'ling--}}
{{--              </h4>--}}
{{--              <form action="">--}}
{{--                <input type="text" placeholder="Enter Your Email" />--}}
{{--                <button type="submit">--}}
{{--                  Obuna bo'lish--}}
{{--                </button>--}}
{{--              </form>--}}
{{--              <div class="social_box">--}}
{{--                <a href="">--}}
{{--                  <i class="fa fa-facebook" aria-hidden="true"></i>--}}
{{--                </a>--}}
{{--                <a href="">--}}
{{--                  <i class="fa fa-twitter" aria-hidden="true"></i>--}}
{{--                </a>--}}
{{--                <a href="">--}}
{{--                  <i class="fa fa-linkedin" aria-hidden="true"></i>--}}
{{--                </a>--}}
{{--                <a href="">--}}
{{--                  <i class="fa fa-instagram" aria-hidden="true"></i>--}}
{{--                </a>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </section>--}}
{{--  <!-- end info_section -->--}}



@endsection
