<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

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
                <a class="navbar-brand fw-bold me-3" style="font-weight:bold;">Movies Blog Post</a>
                <a href="/posts" class="navbar-brand">All posts</a>
            </div>

            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

        </div>
    </nav>

@yield('content');

</html>