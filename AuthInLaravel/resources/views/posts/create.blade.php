<x-app-layout>
    <x-slot name="header">Create Post</x-slot>

    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <div>
            <label>Title:</label>
            <input type="text" name="title" value="{{ old('title') }}">
            @error('title') <span>{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Content:</label>
            <textarea name="content">{{ old('content') }}</textarea>
            @error('content') <span>{{ $message }}</span> @enderror
        </div>
        <button type="submit">Create</button>
    </form>
</x-app-layout>
