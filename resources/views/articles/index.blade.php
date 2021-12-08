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
            <div class="d-flex justify-content-between">
                <div>
                    <h3>All Articles</h3>
                    <hr>
                </div>
                <div>
                    <a href="/articles/create" class="btn btn-primary">New Article</a>
                </div>
            </div>
            <div class="row">
                @forelse ($articles as $article)
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                {{ $article->title }}
                            </div>
                            <div class="card-body">
                                <div>{{ Str::limit($article->body, 100, '.....') }}</div>
                                <a href="/articles/{{ $article->slug }}">Read more</a>
                            </div>
                            <div class="card-footer">
                                Created on {{ $article->created_at->format('d M, Y') }}
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-md-6">
                        <div class="alert alert-info">
                            There's no articles here!
                        </div>
                    </div>
                @endforelse
            </div>
            <div class="d-flex justify-content-center">
                <div>{{ $articles->links() }}</div>
            </div>
        </div>
    @stop
</body>

</html>
