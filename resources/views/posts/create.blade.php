<x-layout>
    <h1>Create Post</h1>

    @if ($errors->any())
        <div>
            <strong>Whoops!</strong> There were some problems with your input.<br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text"
                   name="title"
                   id="title"
                   value="{{ old('title') }}"
                   required
                   maxlength="255">
        </div>
        <div>
            <label for="author">Author:</label>
            <input type="text"
                   name="author"
                   id="author"
                   value="{{ old('author') }}"
                   required
                   maxlength="255">
        </div>
        <div>
            <label for="content">Content:</label>
            <textarea name="content"
                      id="content"
                      required
                      minlength="10">{{ old('content') }}</textarea>
        </div>
        <button type="submit">Create</button>
    </form>
</x-layout>
