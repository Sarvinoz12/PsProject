@extends('Layot.master')
@section('content')


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








@endsection
