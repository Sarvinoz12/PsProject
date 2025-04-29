{{-- resources/views/profile.blade.php --}}
@extends('Layot.master')



@section('content')
    <a class="dropdown-item" href="{{ route('profile.bookings') }}">Mening bandliklarim</a>

    <div class="container mt-4">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Mening Profilim</h4>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('profile.update') }}" method="POST">
                    @csrf
                    @method('PUT')

                    {{-- Foydalanuvchi ismi --}}
                    <div class="mb-3">
                        <label for="name" class="form-label">Ism</label>
                        <input type="text" class="form-control" id="name" name="name"
                               value="{{ old('name', auth()->user()->name) }}" required>
                    </div>

                    {{-- Foydalanuvchi emaili --}}
                    <div class="mb-3">
                        <label for="email" class="form-label">Email manzilingiz</label>
                        <input type="email" class="form-control" id="email" name="email"
                               value="{{ old('email', auth()->user()->email) }}" required>
                    </div>

                    {{-- Foydalanuvchi roli (faqat ko‘rsatish uchun) --}}
                    <div class="mb-3">
                        <label class="form-label">Rol</label>
                        <input type="text" class="form-control" value="{{ auth()->user()->role->name ?? 'Nomaʼlum' }}" disabled>
                    </div>

                    {{-- Parolni o‘zgartirish (ixtiyoriy) --}}
                    <div class="mb-3">
                        <label for="password" class="form-label">Yangi Parol (ixtiyoriy)</label>
                        <input type="password" class="form-control" id="password" name="password">
                        <small class="form-text text-muted">Agar parolni o‘zgartirmoqchi bo‘lsangiz, kiriting.</small>
                    </div>

                    <button type="submit" class="btn btn-success">Saqlash</button>
                </form>
            </div>
        </div>
    </div>
@endsection
