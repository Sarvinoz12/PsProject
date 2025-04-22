@extends('Ps.PsLayot.master')
@section('ps.content')

    <div class="table-wrapper">
        <table class="data-table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Foydalanuvchi</th>
                <th>Telefon</th>
                <th>Xabar</th>
                <th>Status</th>
                <th>Amallar</th>
            </tr>
            </thead>
            <tbody>
            @foreach($booking as $bookinguser)
                <tr>
                    <td>{{ $bookinguser->id }}</td>
                    <td>{{ $bookinguser->name ?? 'Noma’lum foydalanuvchi' }}</td>
                    <td>{{ $bookinguser->phone ?? '-' }}</td>
                    <td>{{ $bookinguser->message }}</td>
                    <td>{{ $bookinguser->status }}</td>
                    <td>
                        <form action="{{ route('bookings.confirm', $bookinguser->id) }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-warning btn-sm">Tasdiqlash</button>
                        </form>
                        <form action="{{ route('bookings.destroy', $bookinguser->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Ishonchingiz komilmi?')">Bekor qilish</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
