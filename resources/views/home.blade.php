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

    @section('head')
        {{-- perintah --}}
        <style>
            body {
                background-color: greenyellow
            }
        </style>
    @endsection

    @section('content')
        <h3>Home Page</h3>
        <p>This is home page from views > home.blade.php</p>
    @endsection
</body>

</html>
