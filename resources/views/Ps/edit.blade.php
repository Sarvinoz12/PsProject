@extends('Ps.PsLayot.master')

@section('ps.content')
    <div class="recipe-form-wrapper">
        <form action="{{ route('ps.update', ['id' => $service->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Retsept nomi -->
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" class="form-control" value="{{ $service->name }}" required>
            </div>

            <div class="form-group">
                <label>Price:</label>
                <input type="number" name="price" class="form-control" value="{{ $service->price }}" required>
            </div>

            <div class="form-group">
                <label>Current Image:</label><br>
                @if ($service->image)
                    <img src="{{ asset('storage/' . $service->image) }}" alt="Current Image" width="100">
                @endif
            </div>

            <div class="form-group">
                <label>New Image (optional):</label>
                <input type="file" name="image" class="form-control">
            </div>

            <div class="form-group">
                <label>Continuity:</label>
                <input type="number" name="continuity" class="form-control" value="{{ $service->continuity }}" required>
            </div>

            <!-- Tugmalar -->
            <div class="form-group">
                <button type="submit" class="button green">Yangilash</button>
                <a href="{{ route('ps.index') }}" class="button red">Bekor qilish</a>
            </div>
        </form>
    </div>
@endsection
