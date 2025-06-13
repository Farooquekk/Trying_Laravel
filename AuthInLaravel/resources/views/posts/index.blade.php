<!DOCTYPE html>
<html>
<head>
    <title>My Posts</title>
</head>
<body>

    <h1>Welcome, {{ auth()->user()->name }}</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('posts.create') }}">+ Create New Post</a>

    <h2>Your Posts</h2>
    <ul>
        @forelse ($posts as $post)
            <li>
                <strong>{{ $post->title }}</strong><br>
                {{ $post->content }}
            </li>
        @empty
            <li>No posts yet.</li>
        @endforelse
    </ul>

</body>
</html>
