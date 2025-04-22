@extends('Layot.master')

@section('content')

    <section class="furniture_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>{{ $service->name }} ga yozilish</h2>
                <p>{{ $service->continuity }} soatlik xizmat – {{ $service->price }} $</p>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset($service->image) }}" class="img-fluid" alt="{{ $service->name }}">
                </div>
                <div class="col-md-6">
                    <form action="{{ route('services.booking.store', $service->id) }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label>Ismingiz</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label>Telefon raqamingiz</label>
                            <input type="text" name="phone" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label>Qo‘shimcha xabar</label>
                            <textarea name="message" rows="4" class="form-control"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Yozilish</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
