@extends('Ps.PsLayot.master')
@section('ps.content')
        <div class="recipe-form-wrapper">
            <form action="{{route('ps.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Retsept nomi -->
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Price:</label>
                    <input type="number" name="price" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Image:</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <div class="form-group">
                    <label>Continuity:</label>
                    <input type="number" name="continuity" class="form-control" required>
                </div>

                <!-- Tugmalar -->
                <div class="form-group">
                    <button type="submit" class="button green">Yaratish</button>
                    <button type="reset" class="button yellow">Tozalash</button>
                </div>
            </form>
        </div>
@endsection
