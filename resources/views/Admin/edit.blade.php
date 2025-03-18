@extends('Admin.Admin Layot.master')
@section('admin.content')
    <div class="container">
        <h2>Psixologni tahrirlash</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(isset($psixolog))
            <form action="{{ route('admin.update', $psixolog->id) }}" method="POST" enctype="multipart/form-data">
                @else
                    <p>Psixolog ma’lumoti topilmadi.</p>
                @endif
            @csrf
            @method('PUT')

            <!-- Ism -->
            <div class="form-group">
                <label for="name">Ism</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $psixolog->name }}" required>
            </div>

            <!-- Rasm -->
            <div class="form-group">
                <label for="image">Joriy rasm:</label><br>
                @if($psixolog->image)
                    <img src="{{ asset('storage/' . $psixolog->image) }}" alt="Rasm" width="100"><br>
                @else
                    <p>Rasm yo‘q</p>
                @endif
                <label for="image">Yangi rasm yuklash (ixtiyoriy):</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>

            <!-- Tajriba -->
            <div class="form-group">
                <label for="tajriba">Tajriba (yil)</label>
                <input type="number" name="tajriba" id="tajriba" class="form-control" value="{{ $psixolog->tajriba }}" required>
            </div>

            <!-- Mutaxassislik -->
            <div class="form-group">
                <label for="spes">Mutaxassislik</label>
                <input type="text" name="spes" id="spes" class="form-control" value="{{ $psixolog->spes }}" required>
            </div>

            <!-- Saqlash tugmasi -->
            <button type="submit" class="btn btn-success">Yangilash</button>
            <a href="{{ route('admin.index') }}" class="btn btn-secondary">Bekor qilish</a>
        </form>
    </div>
@endsection
