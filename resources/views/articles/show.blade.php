<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    @extends('layout/master')

    @section('title', $article->title)

    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            {{ $article->title }} <br>
                            <div class="text-secondary">
                                <a href="/categories/{{ $article->category->slug }}">
                                    Category: {{ $article->category->name }}
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            {{ $article->body }}
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            {{ $article->created_at->format('d M, Y') }}
                            <button type="submit" class="btn btn-danger btn-sm" data-toggle="modal"
                                data-target="#exampleModal">
                                Delete
                            </button>
                            {{-- mengakses modal untuk confirm delete --}}
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">
                                                Are you sure want to delete this article?
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-2">
                                                <div>
                                                    {{ $article->title }}
                                                </div>
                                                <div class="text-secondary">
                                                    <small>Created at: {{ $article->created_at->format('d M, Y') }}
                                                    </small>
                                                </div>
                                            </div>
                                            <form action="/articles/{{ $article->slug }}/delete" method="post">
                                                @method('delete')
                                                @csrf
                                                <div class="d-flex">
                                                    <button class="btn btn-danger btn-sm mr-3" type="submit">Yes</button>
                                                    <button class="btn btn-secondary btn-sm" type="button"
                                                        data-dismiss="modal">Cancel</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <p>Copyright @Inixindo | 2021</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</body>

</html>
