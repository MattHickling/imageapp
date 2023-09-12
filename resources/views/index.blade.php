<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to My Blog</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body style="background-color: #f0f0f0;">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <h1 class="display-4 text-primary">Welcome to My Blog</h1>
                <p class="lead">Explore the latest blog posts.</p>
                <a href="{{ route('blog.index') }}" class="btn btn-primary btn-lg">Enter</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
