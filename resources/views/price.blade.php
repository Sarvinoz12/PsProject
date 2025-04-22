@extends('Layot.master')

@section('content')

    <!-- furniture section -->
    <section class="furniture_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>Bizning Xizmatlar</h2>
                <p>Bizning quyidagi hizmatlarimizdan foydalanishingiz mumkin:</p>
            </div>
            <form method="GET" action="{{ route('services.search') }}" class="mb-4">
                <div class="row">
                    <div class="col-md-5 mb-2">
                        <input type="text" name="name" class="form-control" placeholder="Xizmat nomi" value="{{ request('name') }}">
                    </div>
                    <div class="col-md-5 mb-2">
                        <input type="text" name="category" class="form-control" placeholder="Kategoriya" value="{{ request('category') }}">
                    </div>
                    <div class="col-md-2 mb-2">
                        <button type="submit" class="btn btn-primary w-100">Qidirish</button>
                    </div>
                </div>
            </form>
            @if($services && $services->count() > 0)
                <div class="row">
                    @foreach($services as $service)
                        <div class="col-md-6 col-lg-4">
                            <div class="box">
                                <div class="img-box">
                                    <img src="{{ asset($service->image) }}" alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>{{ $service->name }}</h5>
                                    <div class="price_box">
                                        <h6 class="price_heading">
                                            <span>{{ $service->continuity }} soat</span> {{ $service->price }} $
                                        </h6>
                                        <a href="{{route('services.booking.form',$service->id)}}  ">Yozilish</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            @else
                <div class="text-center">
                    <p>Hech qanday xizmat topilmadi.</p>
                </div>
            @endif
        </div>
    </section>

@endsection
