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
            <h1 class="display-4 text-orange">
                Add new post
            </h1>
            <hr class="border border-1 border-orange mt-4">
        </div>
        <div>
            @if ($errors->any())
            <div class="alert alert-danger">
                Something went wrong....
            </div>
            <ul class="list-group">
                @foreach($errors->all() as $error)
                 <li class="list-group-item">
                    {{ $error }}
                 </li>
                @endforeach
            </ul>
            @endif
        </div>

        <div class="m-auto pt-5">
            <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="form-check">
                        <input type="checkbox" name="is_published" class="form-check-input">
                        <label for="is_published" class="form-check-label text-orange">Is Published</label>
                    </div>
                </div>

                <input type="text" name="title" placeholder="Title..." class="form-control form-control-lg mb-3">

                <input type="text" name="excerpt" placeholder="Excerpt..." class="form-control form-control-lg mb-3">

                <input type="number" name="min_to_read" placeholder="Minutes to read..." class="form-control form-control-lg mb-3">

                <textarea name="body" placeholder="Body..." class="form-control form-control-lg mb-3"></textarea>

                <div class="custom-file py-4">
                    <input type="file" class="custom-file-input" name="image" id="image">
                    <label class="custom-file-label" for="image">Select a file</label>
                </div>

                <button type="submit" class="btn btn-primary btn-lg btn-block mt-4">
                    Submit Post
                </button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- JavaScript for custom file input label -->
    <script>
        document.getElementById('image').addEventListener('change', function () {
            var fileName = this.value.split('\\').pop();
            var label = document.querySelector('.custom-file-label');
            label.textContent = fileName;
        });
    </script>
</body>
</html>
