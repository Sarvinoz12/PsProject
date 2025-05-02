<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{ asset('/admin/css/styles.css') }}">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #e74c3c;
            padding: 15px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .site-name {
            font-size: 24px;
            font-weight: bold;
        }

        .user-notification {
            display: flex;
            align-items: center;
        }

        .notification {
            margin-right: 15px;
            position: relative;
        }

        .notification-badge {
            background-color: yellow;
            border-radius: 50%;
            padding: 3px 6px;
            font-size: 12px;
            position: absolute;
            top: -10px;
            right: -10px;
        }

        .user-logo {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .sidebar-content {
            display: flex;
        }

        .sidebar {
            background-color: #2c3e50;
            color: white;
            width: 200px;
            min-height: 100vh;
            padding: 20px 10px;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 10px 0;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #34495e;
            padding-left: 5px;
        }

        .main-content {
            flex-grow: 1;
            padding: 30px;
            background-color: #f8f9fa;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }

        .button {
            padding: 10px 20px;
            margin-right: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .green {
            background-color: green;
            color: white;
        }

        .yellow {
            background-color: orange;
            color: white;
        }
    </style>
</head>
<body>

<div class="navbar">
    <div class="site-name">RUHONIYAT</div>

    <div class="user-notification">
        <div class="notification">
            <span class="notification-icon">&#128276;</span>
            <span class="notification-badge" id="notificationBadge">0</span>
        </div>

        <img src="{{ asset('img/user1.webp') }}" alt="User Logo" class="user-logo">

        <div class="dropdown">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a href="#" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Chiqish
            </a>
        </div>
    </div>
</div>

<div class="sidebar-content">
    <div class="sidebar">
        <a href="{{ route('ps.main') }}">Dashboard</a>
        <a href="{{ route('ps.create') }}">Kurs Qo'shish</a>
        <a href="{{ route('ps.createtest') }}">Test Qo'shish</a>
        <a href="{{ route('ps.index') }}">Umumiy Kurslar</a>
        <a href="{{ route('ps.alltests') }}">Umumiy Testlar</a>
        <a href="{{ route('ps.bookingusers') }}">Kursga yozilganlar</a>
    </div>

    <div class="main-content">
        @yield('ps.content')
    </div>
</div>

<script src="{{ asset('admin/js/scripts.js') }}"></script>
</body>
</html>
