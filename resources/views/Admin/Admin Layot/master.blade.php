<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{asset('/admin/css/styles.css')}}">
</head>
<body>

    <div class="navbar">
        <div class="admin-controls">
            <!-- Sayt nomi -->
            <div class="site-name">Pazanda</div>
        </div>

        <div class="user-notification">
            <!-- Bildirishnoma ikonchasi user logoning chap tomonida -->
            <div class="notification">
                <span class="notification-icon">&#128276;</span> <!-- Bildirishnoma ikonchasi -->
                <span class="notification-badge" id="notificationBadge">0</span>
            </div>

            <!-- User logo chap tomonda joylashadi -->
            <img src="img/user1.webp" alt="User Logo" class="user-logo">

            <!-- Admin menyusi -->
            <div class="dropdown">
                <a href="#" class="dropdown-toggle" id="adminDropdown">Admin</a>
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
            <a href="{{route('admin.dashbord')}}">Dashboard</a>
            <a href="{{route('admin.create')}}">Retsept Qo'shish</a>
            <a href="{{route('admin.index')}}">Umumiy Retseptlar</a>
        </div>

@yield('admin.content')

    <div class="sidebar-content">
        <div class="sidebar">
            <a href="{{route('admin.dashbord')}}">Dashboard</a>
            <a href="{{route('admin.create')}}">Retsept Qo'shish</a>
            <a href="{{route('admin.index')}}">Umumiy Retseptlar</a>
        </div>
        </div>
    </div>
    <script src="{{asset('admin/js/scripts.js')}}"></script>
</body>
</html>
