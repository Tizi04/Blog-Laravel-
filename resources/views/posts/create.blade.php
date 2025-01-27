<x-app-layout>
    <div class="max-w-4xl mx-auto py-12">
        <!-- Botón Volver -->
        <a href="{{ route('posts.index') }}" class="inline-block bg-gray-600 text-white px-4 py-2 rounded-lg shadow hover:bg-gray-700 transition mb-6">
            Volver
        </a>

        <!-- Caja contenedora del formulario -->
        <div class="bg-white p-8 rounded-lg shadow-md">
            <h1 class="text-2xl font-bold text-gray-800 text-center mb-6">Formulario</h1>

            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 p-4 rounded-lg mb-6">
                    <h2 class="font-semibold mb-2">Errores:</h2>
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Formulario -->
            <form action="{{ route('posts.store') }}" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Título:</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}" class="w-full border border-gray-300 rounded-lg px-3 py-2 shadow-sm focus:outline-none focus:ring focus:ring-blue-300">
                </div>

                <div>
                    <label for="slug" class="block text-sm font-medium text-gray-700 mb-1">Slug:</label>
                    <input type="text" name="slug" id="slug" value="{{ old('slug') }}" class="w-full border border-gray-300 rounded-lg px-3 py-2 shadow-sm focus:outline-none focus:ring focus:ring-blue-300">
                </div>

                <div>
                    <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Categoría:</label>
                    <input type="text" name="category" id="category" value="{{ old('category') }}" class="w-full border border-gray-300 rounded-lg px-3 py-2 shadow-sm focus:outline-none focus:ring focus:ring-blue-300">
                </div>

                <div>
                    <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Contenido:</label>
                    <textarea name="content" id="content" cols="30" rows="10" class="w-full border border-gray-300 rounded-lg px-3 py-2 shadow-sm focus:outline-none focus:ring focus:ring-blue-300">{{ old('content') }}</textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg shadow hover:bg-blue-700 transition">
                        Crear Post
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
