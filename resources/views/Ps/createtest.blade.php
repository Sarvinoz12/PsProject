@extends('Ps.PsLayot.master')
@section('ps.content')
    <div class="recipe-form-wrapper">
        <form action="{{ route('ps.storetest') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Test rasmi -->
            <div class="form-group">
                <label>Test rasmi:</label>
                <input type="file" name="image" class="form-control">
            </div>

            <!-- Savol -->
            <div class="form-group">
                <label>Savol:</label>
                <textarea name="question" class="form-control" rows="3" required></textarea>
            </div>

            <!-- Javoblar -->
            <div class="form-group">
                <label>Javob A:</label>
                <input type="text" name="answer_a" class="form-control" required>
                <label>Description A:</label>
                <textarea name="description_a" class="form-control" rows="2"></textarea>
            </div>

            <div class="form-group">
                <label>Javob B:</label>
                <input type="text" name="answer_b" class="form-control" required>
                <label>Description B:</label>
                <textarea name="description_b" class="form-control" rows="2"></textarea>
            </div>

            <div class="form-group">
                <label>Javob C:</label>
                <input type="text" name="answer_c" class="form-control" required>
                <label>Description C:</label>
                <textarea name="description_c" class="form-control" rows="2"></textarea>
            </div>

            <div class="form-group">
                <label>Javob D:</label>
                <input type="text" name="answer_d" class="form-control" required>
                <label>Description D:</label>
                <textarea name="description_d" class="form-control" rows="2"></textarea>
            </div>

            <!-- Tugmalar -->
            <div class="form-group">
                <button type="submit" class="button green">Testni Yaratish</button>
                <button type="reset" class="button yellow">Tozalash</button>
            </div>
        </form>
    </div>
@endsection
