@extends('Layot.master')
@section('content')


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