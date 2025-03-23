@extends('Admin.Admin Layot.master')
@section('admin.content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="recipe-form-wrapper">
        <form action="{{route('admin.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Ism -->
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            </div>

            <!-- Parol -->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <!-- Tajriba -->
            <div class="form-group">
                <label for="tajriba">Tajriba</label>
                <input type="number" id="tajriba" name="tajriba" value="{{ old('tajriba', 1) }}" required>
            </div>

            <!-- Mutaxassislik -->
            <div class="form-group">
                <label for="spes">Mutaxassislik</label>
                <input type="text" id="spes" name="spes" value="{{ old('spes') }}">
            </div>

            <!-- Rasm yuklash -->
            <div class="form-group">
                <label for="image">Rasm</label>
                <input type="file" id="image" name="image" accept="image/*">
            </div>

            <!-- Tugmalar -->
            <div class="form-group">
                <button type="submit" class="button green">Yaratish</button>
                <button type="reset" class="button yellow">Tozalash</button>
            </div>
        </form>
    </div>
@endsection
