<x-app-layout>
    <div class="max-w-4xl mx-auto py-8">
        <!-- Botón de volver -->
        <div class="mb-6">
            <a href="{{ route('posts.index') }}" 
               class="inline-block text-blue-600 hover:underline">
                ← Volver
            </a>
        </div>

        <!-- Contenedor principal del post -->
        <div class="bg-gray-100 border border-gray-300 rounded-lg shadow p-6">
            <!-- Título del post -->
            <h1 class="text-2xl font-bold text-gray-800 mb-4">
                Título: {{ $post->title }}
            </h1>
            <!-- Información de la categoría -->
            <p class="text-gray-700 mb-4">
                <b class="font-semibold">Categoría:</b> {{ $post->category }}
            </p>

            <!-- Contenido del post (dentro de una box diferenciada) -->
            <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-inner">
                <p class="text-gray-700">
                    {{ $post->content }}
                </p>
            </div>

            <!-- Botones de acciones -->
            <div class="flex items-center space-x-4 mt-6">
                <a href="{{ route('posts.edit', $post) }}" 
                   class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-700 transition">
                    Editar Post
                </a>
                <form action="{{ route('posts.destroy', $post) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" 
                            class="bg-red-600 text-white px-4 py-2 rounded-lg shadow hover:bg-red-700 transition">
                        Eliminar Post
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
