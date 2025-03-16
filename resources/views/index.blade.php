@extends('Layot.master')
@section('content')


\
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
            @foreach($services as $service)
                <div class="col-md-6 col-lg-4">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{$service->image}}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                {{$service->name}}
                            </h5>
                            <div class="price_box">
                                <h6 class="price_heading">
                                    <span>{{$service->continuity}} soat </span> {{$service->price}} $
                                </h6>
                                <a href="">
                                    Yozilish
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
  </section>

  <!-- end furniture section -->


  <!-- about section -->

<section class="blog_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>
                Biz haqimizda
            </h2>
        </div>

        <div class="row">
            @foreach($psixologs as $psixolg)
            <div class="col-md-6 col-lg-4 mx-auto">
                <div class="box">
                    <div class="img-box">
                        <img src="images/test1.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h6>
                            <b>{{$psixolg->user->name}}</b>
                        </h6>
                        <p>
                            <b>Tajribasi: {{$psixolg->Tajriba}}</b>
                            <br>Mutaxasisligi: {{$psixolg->spes}}</b>
                        </p>

                    </div>
                </div>
            </div>
            @endforeach
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



@endsection
