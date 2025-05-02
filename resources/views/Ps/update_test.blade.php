@extends('Ps.PsLayot.master')

@section('ps.content')
    <h2>Testni tahrirlash</h2>
    <form action="{{ route('ps.updateTest', $test->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label>Savol:</label>
        <textarea name="question" required>{{ old('question', $test->question) }}</textarea>

        <label>Javob A:</label>
        <input type="text" name="answer_a" value="{{ old('answer_a', $test->answer_a) }}" required>
        <label>Izoh A:</label>
        <textarea name="description_a">{{ old('description_a', $test->description_a) }}</textarea>

        <label>Javob B:</label>
        <input type="text" name="answer_b" value="{{ old('answer_b', $test->answer_b) }}" required>
        <label>Izoh B:</label>
        <textarea name="description_b">{{ old('description_b', $test->description_b) }}</textarea>

        <label>Javob C:</label>
        <input type="text" name="answer_c" value="{{ old('answer_c', $test->answer_c) }}" required>
        <label>Izoh C:</label>
        <textarea name="description_c">{{ old('description_c', $test->description_c) }}</textarea>

        <label>Javob D:</label>
        <input type="text" name="answer_d" value="{{ old('answer_d', $test->answer_d) }}" required>
        <label>Izoh D:</label>
        <textarea name="description_d">{{ old('description_d', $test->description_d) }}</textarea>

        <label>Yangi Rasm (ixtiyoriy):</label>
        <input type="file" name="image">

        @if($test->image)
            <p>Hozirgi rasm:</p>
            <img src="{{ asset($test->image) }}" alt="Test rasmi" width="100">
        @endif

        <button type="submit">Saqlash</button>
    </form>
@endsection
