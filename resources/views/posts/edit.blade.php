<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-4">
        <h1 class="text-center mb-4">Edit Post</h1>
        @if ($errors->any())
            <div class="alert alert-danger mb-4" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('posts.update', $post) }}" method="POST" class="max-w-md mx-auto bg-white p-4 rounded-lg shadow">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title" class="text-gray-700 text-sm font-weight-bold">Title</label>
                <input type="text" name="title" id="title" class="form-control rounded-md" value="{{ $post->title }}" required>
            </div>
            <div class="form-group">
                <label for="content" class="text-gray-700 text-sm font-weight-bold mt-3">Content</label>
                <textarea name="content" id="content" class="form-control rounded-md" rows="4" required>{{ $post->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-4">Update</button>
        </form>
    </div>
</body>
</html>