<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel App</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="w-full h-full bg-gray-100">
    <div class="container">
        <div class="text-center pt-5">
            <h1 class="display-4 text-primary">
                All Articles
            </h1>
            <hr class="border-primary mt-3">
        </div>

        <div class="py-3">
            <a class="btn btn-primary btn-lg shadow-lg rounded-pill transition-all hover:bg-success"
               href="{{ route('blog.create') }}">
                New Article
            </a>
        </div>
    </div>

    @foreach($posts as $post)
        <div class="container pb-5">
            <div class="bg-white pt-5 rounded-lg shadow-sm mb-5">
                <div class="container pb-5">
                    <h2 class="text-dark font-weight-bold pt-3 pb-0 mb-0">
                        <a href="{{ route('blog.show', $post->id) }}" class="text-dark">
                            {{ $post->title }}
                        </a>
                    </h2>

                    <p class="text-dark py-3">
                        {{ $post->excerpt }}
                    </p>

                    <span class="text-muted small">
                        Made by:
                        <a href="" class="text-success font-italic">
                            Matt
                        </a>
                        22-07-2023
                    </span>
                </div>
            </div>
        </div>
    @endforeach

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
