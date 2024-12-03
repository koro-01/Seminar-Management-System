<x-app-layout>
    <div class="min-h-screen bg-gray-900 text-gray-100">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-100 leading-tight">
                {{ __('Manage Séminaires') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-100">
                        <a href="{{ route('seminaires.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                            Add New Séminaire
                        </a>

                        <table class="min-w-full mt-4 text-left bg-gray-700 rounded-lg">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4">Thème</th>
                                    <th class="py-2 px-4">Date Début</th>
                                    <th class="py-2 px-4">Date Fin</th>
                                    <th class="py-2 px-4">Animateur</th>
                                    <th class="py-2 px-4">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($seminaires as $seminaire)
                                    <tr>
                                        <td class="py-2 px-4">{{ $seminaire->theme }}</td>
                                        <td class="py-2 px-4">{{ $seminaire->date_debut }}</td>
                                        <td class="py-2 px-4">{{ $seminaire->date_fin }}</td>
                                        <td class="py-2 px-4">{{ $seminaire->animateur->nom ?? 'N/A' }}</td>
                                        <td class="py-2 px-4 flex space-x-2">
                                            <a href="{{ route('seminaires.edit', $seminaire->id) }}" class="px-3 py-1 bg-yellow-600 text-white rounded hover:bg-yellow-700">Edit</a>
                                            <form action="{{ route('seminaires.destroy', $seminaire->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{ $seminaires->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
