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
                <!-- Retsept nomi -->
                <div class="form-group">
                    <label for="recipeName">Name</label>
                    <input type="text" id="name" name="name"  required>
                </div>
                <div class="form-group">
                    <label for="recipeName">Tajriba</label>
                    <input type="text" id="tajriba" name="tajriba"  required>
                </div>
                <div class="form-group">
                    <label for="recipeName">Mutaxassisli</label>
                    <input type="text" id="spes" name="spes"  required>
                </div>

                <!-- Rasm yuklash -->
                <div class="form-group">
                    <label for="recipeImage">Rasm</label>
                    <input type="file" id="Image" name="image" accept="image/*" required>
                </div>

                <!-- Tugmalar -->
                <div class="form-group">
                    <button type="submit" class="button green">Yaratish</button>
                    <button type="reset" class="button yellow">Tozalash</button>
                </div>
            </form>
        </div>
@endsection
