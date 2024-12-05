<x-layout>
    <h1>Show Post</h1>

    <h2>{{ $post->title }}</h2>
    <p><strong>Author:</strong> {{ $post->author }}</p>
    <p>{{ $post->content }}</p>

    <a href="{{ route('posts.index') }}">Back to list</a>
</x-layout>
