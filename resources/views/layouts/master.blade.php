<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Portfolio của tôi')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <header class="bg-dark text-white p-3">
        <nav class="container">
            <a href="{{ route('home') }}" class="text-white me-3">Trang chủ</a>
            <a href="{{ route('projects') }}" class="text-white me-3">Dự án</a>
            <a href="{{ route('contact') }}" class="text-white">Liên hệ</a>
        </nav>
    </header>

    <main class="container my-5">
        @yield('content')
    </main>

    <footer class="bg-light text-center p-3 mt-5">
        <p>&copy; 2026 - My Portfolio</p>
    </footer>
</body>
</html>