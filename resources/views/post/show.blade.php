<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="post-list">
                        <h2>{{ $post->title }}</h2>
                        <p>{{ $post->content }}</p>
                        @if ($post->image_path)
                            <img src="{{ asset('storage/' . $post->image_path) }}" alt="Post Image">
                        @endif 

                        <form action="{{ route('comments.store', $post) }}" method="post">
                            @csrf
                            <textarea name="content" cols="112" rows="10"></textarea>
                            <button class="button">Comment</button>
                        </form>
                        @foreach($comments as $comment)

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>