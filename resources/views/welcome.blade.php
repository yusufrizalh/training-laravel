<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    @extends('layout/master')

    @section('title', 'Homepage')

    @section('content')
        <h3>Welcome Page</h3>
        <p>This is welcome page from views > welcome.blade.php</p>
        {{ $email }}
    @endsection
</body>

</html>
