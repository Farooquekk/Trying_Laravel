<h1>All Posts</h1>
<a href="/posts/create">+ New Post</a>
@foreach ($posts as $post)
    <h3>{{ $post->title }}</h3>
    <p>{{ $post->content }}</p>
    <a href="/posts/{{ $post->id }}/edit">Edit</a>
    <form method="POST" action="/posts/{{ $post->id }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endforeach
