<x-app-layout>
    <div class="min-h-screen bg-gray-900 text-gray-100">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-100 leading-tight">
                {{ __('Manage Animateurs') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-100">
                        <!-- Add Animateur Button -->
                        <div class="mb-4">
                            <a href="{{ route('animateurs.create') }}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-300 ease-in-out">Add New Animateur</a>
                        </div>

                        <!-- Animateur Table -->
                        <div class="overflow-x-auto bg-gray-700 p-4 rounded-lg">
                            <table class="min-w-full text-left table-auto text-gray-100">
                                <thead>
                                    <tr class="border-b border-gray-600">
                                        <th class="py-2 px-4">Nom</th>
                                        <th class="py-2 px-4">Prénom</th>
                                        <th class="py-2 px-4">Téléphone</th>
                                        <th class="py-2 px-4">Spécialité</th>
                                        <th class="py-2 px-4">Email</th>
                                        <th class="py-2 px-4">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($animateurs as $animateur)
                                        <tr class="border-b border-gray-600">
                                            <td class="py-2 px-4">{{ $animateur->nom }}</td>
                                            <td class="py-2 px-4">{{ $animateur->prenom }}</td>
                                            <td class="py-2 px-4">{{ $animateur->telephone }}</td>
                                            <td class="py-2 px-4">{{ $animateur->specialite }}</td>
                                            <td class="py-2 px-4">{{ $animateur->email }}</td>
                                            <td class="py-2 px-4 flex space-x-2">
                                              
                                                <!-- Edit -->
                                                <a href="{{ route('animateurs.edit', $animateur->id) }}" class="inline-block px-3 py-1 bg-yellow-600 text-white rounded hover:bg-yellow-700 transition duration-300 ease-in-out">Edit</a>
                                                
                                                <!-- Delete -->
                                                <form action="{{ route('animateurs.destroy', $animateur->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this animateur?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="inline-block px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700 transition duration-300 ease-in-out">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        <div class="mt-4">
                            {{ $animateurs->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
