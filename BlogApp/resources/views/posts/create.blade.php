<h1>Create Post</h1>
<form method="POST" action="/posts">
    @csrf
    <input type="text" name="title" placeholder="Title">
    <br>
    <br>
    <textarea name="content" placeholder="Content"></textarea>
    <br>
    <br>
    <button type="submit">Save</button>
</form>
