@extends('Admin.Admin Layot.master')
@section('admin.content')

    <div class="table-wrapper">
        <table class="data-table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Ism</th>
                <th>Email</th>
                <th>Mutaxasislik</th>
                <th>Tajriba</th>
                <th>Rasm</th>
                <th>Amallar</th>
            </tr>
            </thead>
            <tbody>
            @foreach($psixologs as $psixolog)
                <tr>
                    <td>{{$psixolog->id}}</td>
                    <td>{{$psixolog->name}}</td>
                    <td>{{$psixolog->email}}</td>
                    <td>{{$psixolog->spes}}</td>
                    <td>{{$psixolog->tajriba}} yil</td>
                    <td>
                        @if($psixolog->image)
                            <img src="{{ asset('storage/' . $psixolog->image) }}" alt="Rasm" width="50">
                        @else
                            <span>Yo‘q</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.edit', $psixolog->id) }}" class="btn btn-primary">✏️</a>

                        <form action="{{ route('admin.destroy', $psixolog->id) }}" method="POST" onsubmit="return confirm('Haqiqatan ham o‘chirmoqchimisiz?');" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">🗑</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
