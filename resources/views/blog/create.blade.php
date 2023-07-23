<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="text-center pt-5">
            <h1 class="text-3xl text-orange">
                Add new post
            </h1>
            <hr class="border border-1 border-orange mt-4">
        </div>

        <div class="m-auto pt-5">
            <form 
            action="{{ route('blog.store')}}" 
            method="POST" 
            enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="is_published" class="text-orange">
                        Is Published
                    </label>
                    <input type="checkbox" class="bg-transparent">
                </div>

                <input type="text" name="title" placeholder="Title..." class="form-control bg-transparent text-2xl">

                <input type="text" name="excerpt" placeholder="Excerpt..." class="form-control bg-transparent text-2xl">

                <input type="number" name="min_to_read" placeholder="Minutes to read..." class="form-control bg-transparent text-2xl">

                <textarea name="body" placeholder="Body..." class="form-control py-4 bg-transparent text-xl"></textarea>

                <div class="custom-file py-4">
                    <input type="file" class="custom-file-input" name="image" id="image">
                    <label class="custom-file-label" for="image">Select a file</label>
                </div>

                <button type="submit" class="btn btn-orange btn-lg btn-block mt-4">
                    Submit Post
                </button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
