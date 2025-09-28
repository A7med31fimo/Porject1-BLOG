<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

</head>

<body>

    <nav class="navbar bg-body-tertiary">
        <style>
            .navbar-brand {
                transition: color 0.2s, background 0.2s;
            }

            .navbar-brand:hover {
                color: #808892ff;
                background: #e9ecef;
                border-radius: 4px;
                text-decoration: none;
            }
        </style>
        <div class="container-fluid">
            <div class="d-flex align-items-center">
                <a class="navbar-brand fw-bold me-3" style="font-weight:bold;">Tech Blog Post</a>
                <a href="/posts" class="navbar-brand">All posts</a>
            </div>

            <form method="GET" action="{{ route('posts.search') }}" class="d-flex" role="search">
                @csrf
                <input class="form-control me-2" type="search" placeholder="Search" name="query" value="{{ old('query') }}" aria-label="Search" />
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

            <div class="d-flex align-items-center">
                @if (Auth::check())
                <span class="navbar-text me-3" style="font-weight: bold; text-transform: uppercase;">Welcome, </span>
                <a href="{{ route('user.edit_user_info') }}" class="navbar-brand">{{ Auth::user()->name }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger">Logout</button>
                </form>
                @else
                <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">Login</a>
                <a href="{{ route('register') }}" class="btn btn-outline-secondary">Register</a>
                @endif


            </div>
    </nav>

    @yield('content');

</html>