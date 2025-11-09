<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduFun - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">EduFun</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/category">Category</a></li>
                <li class="nav-item"><a class="nav-link" href="/writers">Writers</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">About Us</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <h1 class="text-center mb-4">Artikel Terbaru</h1>
    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                        <p><small>Category: {{ $post->category }}</small></p>
                        <a href="{{ route('detail', $post->id) }}" class="btn btn-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<footer class="text-center py-4 bg-dark text-light mt-5">
    <p>© 2025 EduFun. All rights reserved.</p>
</footer>

</body>
</html>
