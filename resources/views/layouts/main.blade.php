<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <div class="container">

        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('main.index') }}">Main</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('post.index') }}">Posts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about.index') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact.index') }}">Contacts</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        @yield('content')

    </div>

</body>
</html>
