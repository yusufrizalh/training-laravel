<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    @extends('layout/master')

    @section('title', $slug)

    @section('content')
        <h3>Article Page</h3>
        <p>{{ $slug }}</p>
    @endsection
</body>

</html>
