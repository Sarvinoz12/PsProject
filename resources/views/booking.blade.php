@extends('Layot.master')

@section('content')
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h4>Psixologga Yozilish</h4>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('booking.store') }}" method="POST">
                    @csrf

                    {{-- Xizmatni tanlash --}}
                    <div class="mb-3">
                        <label for="service_id" class="form-label">Xizmat turi</label>
                        <select name="service_id" class="form-control" required>
                            <option value="">Tanlang</option>
                            @foreach($services as $service)
                                <option value="{{ $service->id }}">{{ $service->name }} ({{ $service->price }} so'm)</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Psixologni tanlash --}}
                    <div class="mb-3">
                        <label for="psixolog_id" class="form-label">Psixolog</label>
                        <select name="psixolog_id" class="form-control" required>
                            <option value="">Tanlang</option>
                            @foreach($psixologs as $psixolog)
                                <option value="{{ $psixolog->id }}">{{ $psixolog->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Foydalanuvchi ismi --}}
                    <div class="mb-3">
                        <label for="name" class="form-label">Ismingiz</label>
                        <input type="text" name="name" class="form-control" value="{{ auth()->user()->name }}" required>
                    </div>

                    {{-- Telefon --}}
                    <div class="mb-3">
                        <label for="phone" class="form-label">Telefon raqam</label>
                        <input type="text" name="phone" class="form-control" required>
                    </div>

                    {{-- Xabar --}}
                    <div class="mb-3">
                        <label for="message" class="form-label">Xabar (ixtiyoriy)</label>
                        <textarea name="message" class="form-control" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Yuborish</button>
                </form>
            </div>
        </div>
    </div>
@endsection
