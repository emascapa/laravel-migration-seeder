<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel-Trips</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>

        <header>
            <nav class="nav justify-content-center bg-dark">
              <a class="nav-link active" href="#">Home</a>
              <a class="nav-link" href="#">Reviews</a>
              <a class="nav-link disabled" href="#">Invita un amico</a>
            </nav>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <section class="bg-dark text-light py-2 d-flex justify-content-center">
                2022 Copyright &copy;
            </section>
        </footer>

    </body>
</html>
