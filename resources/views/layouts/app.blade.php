<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog System</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
     .card {
        margin-top: 20px;
        padding: 20px;
        border-radius: 8px;
    }
    html, body {
        height: 100%; /* خلي ارتفاع الـ body يكون 100% */
    }
    body {
        background-color:rgb(224, 224, 224); /* اللون الرصاصي */
    }
    body {
        display: flex;
        flex-direction: column;
    }
    .content {
        flex: 1; /* خلي المحتوى يأخذ كل المساحة المتاحة */
    }
    footer {
        margin-top: auto; /* خلي الـ footer يظهر في أسفل الصفحة */
    }
</style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">




    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">Blog System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <!-- شيل الروابط دي لو مش عايزهم -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/posts') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/posts/create') }}">Create Post</a>
                </li>
            </ul>
        </div>
    </div>
    

</nav>




    <header>
        <h1>Blog System</h1>
        
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2025 Blog System - All Rights Reserved</p>
</footer>


    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
