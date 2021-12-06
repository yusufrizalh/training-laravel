<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- mengakses Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    @yield('head')
</head>

<body>
    @include('layout/navigation')
    <div class="container">
        <div class="py-4">
            @yield('content')
        </div>
    </div>
</body>

</html>
