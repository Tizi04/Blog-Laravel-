<x-app-layout>
    <!-- Slot para el header -->
    <x-slot name="header">
        <div class="bg-gray-800 text-white p-4">
            <h1 class="text-xl font-bold">¡Mi encabezado personalizado!</h1>
        </div>
    </x-slot>

    <!-- Contenido principal -->
    <div class="max-w-4xl mx-auto px-4">
        <h1>Bienvenido a la página principal</h1>
        <x-alert2 type="success">
            <x-slot name="title">
                ¡Éxito!
            </x-slot>
            Contenido de la alerta.
        </x-alert2>
    </div>

    <!-- Slot para el footer -->
    <x-slot name="footer">
        <div class="bg-gray-800 text-white p-4 text-center">
            <p>&copy; {{ date('Y') }} Mi Página Web. Todos los derechos reservados.</p>
        </div>
    </x-slot>
</x-app-layout>
