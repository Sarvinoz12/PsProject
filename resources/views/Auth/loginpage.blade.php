@extends('layot.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Tizimga kirish</div>

                    <div class="card-body">
                        @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        <form method="POST" action="{{ route('login.post') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email manzil</label>
                                <input type="email" name="email" class="form-control" required autofocus>
                            </div>

                            <div class="form-group">
                                <label for="password">Parol</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>

                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Kirish</button>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary"><a href="{{route('register')}}">Ro'yhatdan o'tish</a></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
