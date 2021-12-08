<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Article</title>
</head>

<body>
    @extends('layout/master', ['title' => 'Edit Article'])

    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-success text-white">{{ $article->title }}</div>
                        <div class="card-body">
                            <form action="/articles/{{ $article->slug }}/edit" method="post" autocomplete="off"
                                enctype="multipart/form-data">
                                @method('patch')
                                @csrf
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title"
                                        value="{{ old('title') ?? $article->title }}" class="form-control is-invalid">
                                    @error('title')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="body">Body</label>
                                    <textarea name="body" id="body"
                                        class="form-control is-invalid">{{ old('body') ?? $article->body }}</textarea>
                                    @error('body')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-success">Edit Article</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</body>

</html>
