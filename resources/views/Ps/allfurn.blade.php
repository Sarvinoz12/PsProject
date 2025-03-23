@extends('Ps.PsLayot.master')
@section('ps.content')

        <div class="table-wrapper">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Continuity</th>
                        <th>Image</th>
                    </tr>
                </thead>
                @foreach($services as $service)
                <tbody>
                    <tr>
                        <td>{{$service->id}}</td>
                        <td>{{$service->name}}</td>
                        <td>{{$service->price}}</td>
                        <td>{{$service->continuity}}</td>
                        <td>{{$service->image}}</td>
                        <td>
                            <a href="{{ route('ps.edit', $service->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('ps.destroy', $service->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <!-- Boshqa retseptlar shu yerda bo'ladi -->
                </tbody>
                @endforeach
            </table>
        </div>

@endsection
