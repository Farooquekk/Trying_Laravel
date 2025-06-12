<h1>Edit Post</h1>
<form method="POST" action="/posts/{{ $post->id }}">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $post->title }}">
    <textarea name="content">{{ $post->content }}</textarea>
    <button type="submit">Update</button>
</form>
