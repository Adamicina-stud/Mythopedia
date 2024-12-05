<x-layout>
    <h1>Posts index Page</h1>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <div>
        <a href="{{ route('posts.create') }}">Create new Post</a>
    </div>

    <ul>
        @foreach($posts as $post)
            <li style="display: flex; align-items: center; justify-content: space-between; border:1px solid #ddd; background:#fff; margin-bottom:10px; padding:10px;">
                <div>
                    <strong>{{ $post->title }}</strong><br>
                    <em>By: {{ $post->author }}</em><br>
                    <a href="{{ route('posts.show', $post) }}">Show</a> |
                    <a href="{{ route('posts.edit', $post) }}">Edit</a>
                </div>
                <div>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</x-layout>
