@extends('Layot.master')

@section('content')
    <div class="container mt-4">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Mening Bandliklarim</h4>
            </div>
            <div class="card-body">
                @if($bookings->isEmpty())
                    <p>Sizda hali hech qanday bandlik mavjud emas.</p>
                @else
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Xizmat</th>
                            <th>Psixolog</th>
                            <th>Telefon</th>
                            <th>Izoh</th>
                            <th>Holat</th>
                            <th>Sana</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bookings as $index => $booking)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $booking->service->name ?? 'Nomaʼlum xizmat' }}</td>
                                <td>{{ $booking->psixolog->name ?? 'Nomaʼlum' }}</td>
                                <td>{{ $booking->phone }}</td>
                                <td>{{ $booking->message }}</td>
                                <td>{{ ucfirst($booking->status) }}</td>
                                <td>{{ $booking->created_at->format('d.m.Y H:i') }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
@endsection
