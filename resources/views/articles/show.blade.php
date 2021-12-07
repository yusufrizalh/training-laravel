<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    @extends('layout/master')

    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            {{ $article->title }}
                        </div>
                        <div class="card-body">
                            {{ $article->body }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</body>

</html>
