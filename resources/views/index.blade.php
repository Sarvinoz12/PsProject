@extends('Layot.master')
@section('content')


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
                                        <a href="{{route('cantact.page')}}" class="btn1">
                                            Bog'lanish
                                        </a>
                                        <a href="{{route('about.page')}}" class="btn2">
                                            Biz haqimizda
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="img-box">
                                    <img src="images/image.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#customCarousel" data-slide-to="0" class="active"></li>

            </ol>
        </div>
    </section>
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
                            <img src="{{asset('storage/'.$service->image)}}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                {{$service->name}}
                            </h5>

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
                Bizning mutaxasislar
            </h2>
        </div>

        <div class="row">
            @foreach($psixologs as $psixolg)
            <div class="col-md-6 col-lg-4 mx-auto">
                <div class="box">
                    <div class="img-box">
                        <img src="{{asset('storage/'.$psixolg->image)}}" alt="">
                    </div>
                    <div class="detail-box">
                        <h6>
                            <b>{{$psixolg->name}}</b>
                        </h6>
                        <p>
                            <b>Tajribasi: {{$psixolg->tajriba}}</b>
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
          @foreach($tests as $test)
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
                 <img src="{{asset($test->image)}}" alt="">
            </div>
            <div class="detail-box">
              <h6>
                <b>{{$test->question}}</b>
              </h6>
              <p>
                <b>{{$test->answer_a}} : </b>
                  {{$test->description_a}}<br>
                  <b>{{$test->answer_b}} : </b>
                  {{$test->description_b}}<br>
                  <b>{{$test->ansewer_c}} : </b>
                  {{$test->description_c}}<br>
                  <b>{{$test->answer_d}} : </b>
                  {{$test->description_d}}
              </p>
            </div>
          </div>
        </div>
          @endforeach
      </div>
    </div>
  </section>

  <!-- end blog section -->

  <!-- client section -->




  <!-- end client section -->

  <!-- contact section -->
  <section class="contact_section long_section">
      <div class="container">
          <div class="row">
              <div class="col-md-6">
                  <div class="form_container">
                      <div class="heading_container">
                          <h2>
                              Bog'lanish
                          </h2>
                      </div>

                      <!-- Success xabarini ko'rsatish -->
                      @if(session('success'))
                          <div class="alert alert-success">
                              {{ session('success') }}
                          </div>
                      @endif

                      <form action="{{ route('sendcantact') }}" method="POST">
                          @csrf
                          <div>
                              <input type="text" name="name" placeholder="Ism" value="{{ old('name') }}" required />
                              @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                          </div>
                          <div>
                              <input type="text" name="phone" placeholder="Raqam" value="{{ old('phone') }}" required />
                              @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                          </div>
                          <div>
                              <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required />
                              @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                          </div>
                          <div>
                              <input type="text" name="message" class="message-box" placeholder="Xabar" value="{{ old('message') }}" required />
                              @error('message') <span class="text-danger">{{ $message }}</span> @enderror
                          </div>
                          <div class="btn_box">
                              <button type="submit">Jo'natish</button>
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
