<!DOCTYPE html>
<html>

    <head>
        <title>Laravel 10 Task List App</title>
        @yield('styles')
    </head>

    <body>
        <h1>@yield('title')</h1>

        <div>
            @if (session()->has('success'))
                {{ session('success') }}
            @endif
        </div>

        <div>
            @yield('content')
        </div>
    </body>

</html>