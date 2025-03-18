@extends('Admin.Admin Layot.master')
@section('admin.content')

        <div class="table-wrapper">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nomi</th>
                        <th>Mutaxasiligi</th>
                        <th>Tajribasi</th>
                        <th>Rasmi</th>
                    </tr>
                </thead>
                @foreach($psixologs as $psixolog)
                <tbody>
                    <tr>
                        <td>{{$psixolog->id}}</td>
                        <td>{{$psixolog->name}}</td>
                        <td>{{$psixolog->spes}}</td>
                        <td>{{$psixolog->tajriba}}</td>
                        <td>{{$psixolog->image}}</td>
                        <td>
                            <a href="{{ route('admin.edit', $psixolog->id) }}" class="btn btn-primary">Tahrirlash</a>

                            <form action="{{ route('admin.destroy', $psixolog->id) }}" method="POST" onsubmit="return confirm('Haqiqatan ham o‘chirmoqchimisiz?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">O‘chirish</button>
                            </form>
                        </td>
                    </tr>

                </tbody>
                @endforeach
            </table>
        </div>

@endsection
