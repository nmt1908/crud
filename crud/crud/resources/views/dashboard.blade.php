<!DOCTYPE html>
<html>
<head>
    <title>Custom Auth in Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('storage/css/login.css')}}">
    <link rel="stylesheet" href="{{ asset('storage/css/list.css')}}">
    <link rel="stylesheet" href="{{ asset('storage/css/update.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<nav class="navbar navbar-dark navbar-expand-lg mb-5" style="background-color: #007bff;">
    <div class="container">
        <a class="navbar-brand mr-auto" href="#">CRUD-USER</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('listuser') }}">ListUser</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('listinterests') }}">List interest</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

@yield('content')

@yield('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>