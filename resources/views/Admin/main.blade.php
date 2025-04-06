@extends('Admin.Admin Layot.master')

@section('admin.content')

    <div class="table-wrapper">
        <table class="data-table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Ism</th>
                <th>Telefon</th>
                <th>Email</th>
                <th>Xabar</th>
                <th>Yaratilgan</th>
                <th>O'chirish</th>
            </tr>
            </thead>
            <tbody>
            @foreach($callings as $calling)
                <tr>
                    <td>{{ $calling->id }}</td>
                    <td>{{ $calling->name }}</td>
                    <td>{{ $calling->phone }}</td>
                    <td>{{ $calling->email }}</td>
                    <td>{{ $calling->message }}</td>
                    <td>{{ $calling->created_at }}</td>
                    <td>
                        <form action="{{ route('admin.calling.destroy', $calling->id) }}" method="POST" onsubmit="return confirm('Haqiqatan ham o‘chirmoqchimisiz?');" style="display:inline;">
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
