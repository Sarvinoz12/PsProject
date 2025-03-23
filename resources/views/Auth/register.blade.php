<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ro‘yxatdan o‘tish</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea, #764ba2);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .register-container {
            background: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .register-container h2 {
            text-align: center;
            color: #333;
            margin-bottom: 1.5rem;
        }
        .form-control {
            border-radius: 5px;
        }
        .btn-primary {
            background: #667eea;
            border: none;
        }
        .btn-primary:hover {
            background: #5a67d8;
        }
        .text-muted {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div class="register-container">
    <h2>Ro‘yxatdan o‘tish</h2>
    @if($errors->any())
        <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif
    <form action="{{ route('register.post') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Ism</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Parol</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Parolni tasdiqlash</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Ro‘yxatdan o‘tish</button>
    </form>

    <p class="text-muted mt-3">
        Tizimda hisobingiz bormi? <a href="{{ route('login') }}" class="text-decoration-none">Tizimga kirish</a>
    </p>
</div>
</body>
</html>
