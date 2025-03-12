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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
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
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Bog'lanish</a>
              </li>
            </ul>
          </div>
            <a href="">
              <span>
                Login
              </span>
              <i class="fa fa-user" aria-hidden="true"></i>
            </a>
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
    <!-- slider section -->
    <section class="slider_section long_section">
      <div id="customCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-5">
                  <div class="detail-box">
                    <h1>
                      Ruhoniyat
                    </h1>
                    <p>
                      Biz bilan dunyoni qayta kashf eting
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Bog'lanish
                      </a>
                      <a href="" class="btn2">
                        Biz haqimizda
                      </a>
                    </div>
                  </div>
                </div>


                <div class="col-md-7">
                  <div class="img-box">
                    <img src="images/psixologiya1-Photoroom.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-5">
                  <div class="detail-box">
                    <h1>
                      Ruhoniyat <br>

                    </h1>
                    <p>
                      Biz bilan dunyoni qayta kashf eting
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Bog'lanish
                      </a>
                      <a href="" class="btn2">
                        Biz haqimizda
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="img-box">
                    <img src="images/psixologiya1-Photoroom.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-5">
                  <div class="detail-box">
                    <h1>
                     Ruhoniyat<br>

                    </h1>
                    <p>
                      Biz bilan dunyoni qayta kashf eting
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Bog'lanish
                      </a>
                      <a href="" class="btn2">
                        Biz haqimizda
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="img-box">
                    <img src="images/psixologiya1-Photoroom.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel" data-slide-to="1"></li>
          <li data-target="#customCarousel" data-slide-to="2"></li>
        </ol>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- furniture section -->

  <section class="furniture_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Bizning Xizmatlar
        </h2>
        <p>
          Bizning quyidagi hizmatlarimizdan foydalanishingiz mumkin:
        </p>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="images/bolalarucun.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Bolalar / o’smirlar uchun maslahat (15 yoshgacha)
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>1 soat</span> 400 ming so'm
                </h6>
                <a href="">
                  Yozilish
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="images/onlayn2.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Onlayn konsultatsiya
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>1 soat</span> 450 ming so'm
                </h6>
                <a href="">
                  Yozilish
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="images/yakka.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
               Kattalar uchun yakkama-yakka konsultatsiya
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>1 soat</span> 450 ming so'm
                </h6>
                <a href="">
                  Yozilish
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="images/oilaviykonsul.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Oilaviy konsultatsiya
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>1 soat</span> 700 ming so'm
                </h6>
                <a href="">
                  Yozilish
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="images/guruh....jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                	Guruh ishi
                    (muammolarga yo’naltirilgan guruhlar)
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>1 soat</span> 300 ming so'm
                </h6>
                <a href="">
                  Yozilish
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="images/individual..jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Individual konsultatsiya
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>1 soat</span> 400 ming so'm
                </h6>
                <a href="">
                  Yozilish
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end furniture section -->


  <!-- about section -->

  <section class="about_section layout_padding long_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/about1.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Biz haqimizda
              </h2>
            </div>
            <p>
              Bizning markaz 2020 - yilda tashkil etilgan. Biz sizga har xil turdagi hizmatlarni taklif qilamiz.Biz bilan har qanday muammolaringizga yechim topishingiz mumkin.
            </p>
            <a href="">
              Ko'proq
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- blog section -->

  <section class="blog_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
        Psixalogik testlar
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
                 <img src="images/test1.png" alt="">
            </div>
            <div class="detail-box">
              <h6>
                <b>Rasmda birinchi nimani ko'rdingiz</b>
              </h6>
              <p>
                <b>ROBOT:</b>
Siz juda ko‘p ishlaysiz hattoki, ta’til vaqtingizda ham deyarli dam olishga chiqmaysiz. Unutmang, hamisha o‘zingiz haqingizda qayg‘urishingiz uchun vaqt topiladi.<br><b>QUTI:</b>
G‘amxo‘rlik qilish, g‘amxo‘rlik qilish, g‘amxo‘rlik qilish…. Butun hayotingiz ko‘z o‘ngingizda o‘tib ketayotganidan xabaringiz bormi?!<br><b>QO‘LLAR:</b>
Siz juda ajoyib, hamsuhbat insonsiz. Sizning doim katta muloqot doirangiz va tarafdorlaringiz mavjud.
              </p>

            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/test2.png" alt="">
            </div>
            <div class="detail-box">
              <h6>
                <b>Rasmda birinchi nimani ko'rdingiz</b>
              </h6>
              <p>
                <b>INSON YUZI:</b>

Siz odamlar bilan yaxshi munosabat o‘rnatadigan, sezgir va empatik insonsiz.
Siz boshqalarning his-tuyg‘ularini tushunish va ularga yordam berishga moyilsiz.<br> <b>IKKITA QO'l:</b>

Siz realistik va amaliy fikrlovchi odamsiz.
Oddiy narsalarda ham chuqur ma’nolarni izlashga moyilsiz.<br><b>ABSTRAKT SHAKL YOKI NAQSH:</b>Siz ijodiy va noan’anaviy fikrlaydigan insonsiz.
Oddiy narsalarda ham chuqur ma’nolarni izlashga moyilsiz.
              </p>

            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/test3.png" alt="">
            </div>
            <div class="detail-box">
              <h6>
                <b>Rasmda birinchi nimani ko'rdingiz</b>
              </h6>
              <p>
                <b>HAYVON:</b>Siz mustaqil va kuzatuvchan insonsiz.
Har bir vaziyatni puxta o‘rganib, keyin qaror qabul qilasiz.<br><b>INSON YUZI:</b>Siz ijtimoiy va ochiq insonsiz, odamlar bilan tez chiqishib keta olasiz.
Sizga jamoada ishlash yoqadi va boshqalarning his-tuyg‘ularini tushuna olasiz.<br><b>ABSTRAKT SHAKL YOKI NAQSH:</b>Siz ijodiy va innovatsion fikrlaydigan insonsiz.
Oddiy narsalardan ham yangi g‘oyalar chiqarish qobiliyatingiz bor.
              </p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end blog section -->

  <!-- client section -->

  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          Psixolog haqida
        </h2>
      </div>
      <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="" />
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                      <h6>
                        Sarvinoz Razzaqberdiyeva
                      </h6>
                    </div>
                    <p>
                      1996 - yilda Toshkent shahrida tug'ulgan.<br>
                      2018 - yilda O‘zbekiston Milliy universitetining bakalavr yo'nalishini tamomlagan.<br>
                      2020 - yilda O‘zbekiston Milliy universitetining magistr yo'nalishini tamomlagan.<br>
                      2024 - yilda 4 - yillik tajribaga ega psixolog.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="" />
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                      <h6>
                        Sarvinoz Razzaqberdiyeva
                      </h6>
                    </div>
                    <p>
                      1996 - yilda Toshkent shahrida tug'ulgan.<br>
                      2018 - yilda O‘zbekiston Milliy universitetining bakalavr yo'nalishini tamomlagan.<br>
                      2020 - yilda O‘zbekiston Milliy universitetining magistr yo'nalishini tamomlagan.<br>
                      2024 - yilda 4 - yillik tajribaga ega psixolog.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="" />
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                      <h6>
                        Sarvinoz Razzaqberdiyeva
                      </h6>
                    </div>
                    <p>
                      1996 - yilda Toshkent shahrida tug'ulga.n<br>
                      2018 - yilda O‘zbekiston Milliy universitetining bakalavr yo'nalishini tamomlagan.<br>
                      2020 - yilda O‘zbekiston Milliy universitetining magistr yo'nalishini tamomlagan.<br>
                      2024 - yilda 4 - yillik tajribaga ega psixolog.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- end client section -->

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
                Instagram galereyasi
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
                  <img src="images/yakka.jpg" alt="">
                </div>
                <div class="img-box">
                  <img src="images/bolalarucun.jpg" alt="">
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
  <!-- end info_section -->




@endsection