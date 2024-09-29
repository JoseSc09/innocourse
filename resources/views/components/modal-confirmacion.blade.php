@props(['modalId','title','message'])
<div id="{{ $modalId }}"
    class="fixed inset-0 hidden items-center justify-center z-50 bg-gray-900 bg-opacity-50 transition-opacity duration-300">
    <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
        <h2 class="text-xl font-bold mb-4">{{ $title }}</h2>
        <p>{{ $message }}</p>

        <div class="flex justify-end mt-4">
            <!-- Botón para cerrar el modal -->
            <button onclick="closeModal('{{ $modalId }}')"
                class="bg-gray-300 px-4 py-2 rounded mr-2">Cancelar</button>

            <!-- Formulario de eliminación -->
            <form id="deleteForm" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Eliminar</button>
            </form>
        </div>
    </div>
</div>
