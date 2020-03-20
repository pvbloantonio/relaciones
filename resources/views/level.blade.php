<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios de {{ $level->name }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
        <div class="container">
            <div class="row">
                <div class="col-12 my-3 pt-3 shadow">
                <h1>Contenido de usuarios nivel {{ $level->name }}</h1>
                <hr>
                <h3>Posts</h3>
                    <div class="row">
                        @foreach ($posts as $post )
                            <div class="col-6">
                                <div class="card mb-3">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                        <img src="{{ $post->image->url }}" class="card-img" alt="">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                    <h5 class="card-title">{{ $post->name  }}</h5>
                                                    <h6 class="card-subtitle text-muted">
                                                        {{ $post->category->name }} |
                                                        {{ $post->comments_count }}
                                                        {{ Str::plural('comentario', $post->comments_count) }}
                                                    </h6>
                                                    <p class="card-text small">
                                                        @foreach ( $post->tags as $tag )
                                                                <span class="badge badge-light">
                                                                    #{{ $tag->name }}
                                                                </span>
                                                        @endforeach
                                                    </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <h1>Contenido en video de usuarios nivel {{ $level->name }}</h1>
                    <hr>
                    <div class="row">
                        @foreach ($videos as $video )
                            <div class="col-6">
                                <div class="card mb-3">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                        <img src="{{ $video->image->url }}" class="card-img" alt="">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                    <h5 class="card-title">{{ $video->name  }}</h5>
                                                    <h6 class="card-subtitle text-muted">
                                                        {{ $video->category->name }} |
                                                        {{ $video->comments_count }}
                                                        {{ Str::plural('comentario', $video->comments_count) }}
                                                    </h6>
                                                    <p class="card-text small">
                                                        @foreach ( $video->tags as $tag )
                                                                <span class="badge badge-light">
                                                                    #{{ $tag->name }}
                                                                </span>
                                                        @endforeach
                                                    </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
</body>
</html>