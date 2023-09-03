<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel App</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Laravel App</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog.create') }}">New Article</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <h1 class="display-4 text-primary text-center">All Articles</h1>
        <hr class="border-primary">
    </div>

    <div class="container mt-3 mb-5">
        @if (session()->has('message'))
            <div class="alert alert-warning">
                Warning: {{ session()->get('message') }}
            </div>
        @endif

        @foreach($posts as $post)
            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title">
                        <a href="{{ route('blog.show', $post->id) }}" class="text-dark">{{ $post->title }}</a>
                    </h2>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <p class="card-text small text-muted">
                        Made by: <a href="#" class="text-success font-italic">Matt</a> {{ $post->created_at->format('d-m-Y') }}
                    </p>
                    <a href="{{ route('blog.edit', $post->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="{{ route('blog.destroy', $post->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

    <div class="container">
        <ul class="pagination justify-content-center custom-pagination">
            {{ $posts->links() }}
        </ul>
    </div>
    

    <!-- Bootstrap JavaScript and jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
