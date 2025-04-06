@extends('Layot.master')

@section('content')

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
