<?php
use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello from Laravel!';
});


Route::get('/create-post', function () {
    Post::create([
        'title' => 'My First Post',
        'content' => 'This is the content.',
    ]);
    return 'Post created!';
});

// Route::get('/posts',function(){
//     return Post::all();
// });
Route::get('/posts', function () {
    $posts = Post::all();
    return view('posts', compact('posts'));
});
