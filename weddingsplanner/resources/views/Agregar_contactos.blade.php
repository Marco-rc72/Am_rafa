<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<div class=" flex items-center justify-between">
    <div class="w-full ml-16 px-4">
        <h2 class="text-2xl font-bold mb-4 ml-8">Agregar Contacto</h2>
        <form action="{{ route('contactos.store') }}" method="POST" class="bg-blue-500 rounded px-0.5 py-0.5 mb-4">
            @csrf
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8">
                <div class="mb-4">
                    <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                    <input type="text" name="nombre" id="nombre"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>
                <div class="mb-4">
                    <label for="correo_electronico" class="block text-gray-700 text-sm font-bold mb-2">Correo
                        Electronico:</label>
                    <input type="text" name="correo_electronico" id="correo_electronico"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="telefono" class="block text-gray-700 text-sm font-bold mb-2">Telefono:</label>
                    <input type="text" name="telefono" id="telefono"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>
                <div class="mb-4">
                    <label for="empresa" class="block text-gray-700 text-sm font-bold mb-2">Empresa:</label>
                    <input type="text" name="empresa" id="empresa"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="flex items-center justify-center">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Guardar</button>
                </div>
            </div>
        </form>

    </div>
</div>
