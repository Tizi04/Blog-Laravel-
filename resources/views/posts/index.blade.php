<x-app-layout>
    <div class="max-w-4xl mx-auto py-8">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">
            Aquí se mostrarán todos los posts
        </h1>
        <div class="text-center mb-6">
            <a href="{{ route('posts.create') }}" 
               class="inline-block bg-blue-600 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-700 transition">
                Nuevo Post
            </a>
        </div>
        <ul class="space-y-4">
            @foreach ($posts as $post)
            <li class="bg-gray-100 border border-gray-300 rounded-lg shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-200">
                <a href="{{ route('posts.show', $post) }}" 
                   class="block text-lg text-blue-600 hover:underline hover:text-blue-800 px-4 py-3">
                    {{ $post->title }}
                </a>
            </li>
            @endforeach
        </ul>
        <div class="mt-6">
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>
