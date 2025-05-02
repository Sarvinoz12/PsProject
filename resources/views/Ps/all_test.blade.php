@extends('Ps.PsLayot.master')

@section('ps.content')
    <div class="table-wrapper">
        <h2>Testlar ro‘yxati</h2>
        <table class="data-table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Savol</th>
                <th>Rasm</th>
                <th>Javob A</th>
                <th>Izoh A</th>
                <th>Javob B</th>
                <th>Izoh B</th>
                <th>Javob C</th>
                <th>Izoh C</th>
                <th>Javob D</th>
                <th>Izoh D</th>
                <th>Amallar</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tests as $test)
                <tr>
                    <td>{{ $test->id }}</td>
                    <td>{{ \Str::limit($test->question, 50) }}</td>
                    <td>
                        @if($test->image)
                            <img src="{{ asset($test->image) }}" alt="Rasm" width="70">
                        @else
                            Yo‘q
                        @endif
                    </td>
                    <td>{{ $test->answer_a }}</td>
                    <td>{{ $test->description_a ?? '-' }}</td>
                    <td>{{ $test->answer_b }}</td>
                    <td>{{ $test->description_b ?? '-' }}</td>
                    <td>{{ $test->answer_c }}</td>
                    <td>{{ $test->description_c ?? '-' }}</td>
                    <td>{{ $test->answer_d }}</td>
                    <td>{{ $test->description_d ?? '-' }}</td>
                    <td>
                        <a href="{{route('ps.edittest',$test->id)}}" class="btn btn-warning btn-sm">Tahrirlash</a>
                        <form action="{{ route('ps.deleteTest', $test->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Haqiqatan ham o‘chirmoqchimisiz?')">
                                O‘chirish
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
