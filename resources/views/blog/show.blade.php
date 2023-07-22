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
<body>
    <div class="container">
        <div class="pt-5">
            <a href="{{ URL::previous() }}" class="text-success font-italic hover:text-success hover:border-bottom-2 border-success pb-3 transition-all py-4">
                < Back to previous page
            </a>
        </div>

        <h4 class="text-left text-center text-2xl md:text-5xl font-weight-bold text-dark py-5 md:py-10">
            {{ $post->title }}
        </h4>

        <div class="row">
            <div class="col-md-9 text-center text-md-left">
                <span class="text-left text-center text-md-left d-block text-dark pb-5 md:pb-10">
                    Made by:
                    <a href="" class="font-weight-bold text-success font-italic hover:text-success hover:border-bottom-2 border-success pb-3 transition-all py-4">
                        Matt
                    </a>
                    On 23-07-2022
                </span>
            </div>
        </div>

        <div class="pt-5 pb-5 text-dark text-xl">
            <p class="font-weight-bold text-2xl pb-5">
                {{ $post->excerpt }}
            </p>

            <p class="text-base">
                {{ $post->body }}
                {{-- {{ dd($post->body) }} --}}
            </p>
        </div>
    </div>
    </body>
</html>
