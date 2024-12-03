<x-app-layout>
    <div class="max-w-7xl mx-auto p-6 bg-gray-900 text-gray-100">
        <h2 class="text-2xl font-bold mb-6">Séminaires</h2>

        <!-- Search Form -->
        <form action="{{ route('seminaires.search') }}" method="GET" class="mb-6">
            <div class="flex items-center gap-4">
                <input 
                    type="text" 
                    name="search" 
                    placeholder="Search by thème, description, or animateur..." 
                    value="{{ request('search') }}" 
                    class="w-full bg-gray-800 rounded border border-gray-600 py-2 px-4 text-gray-200"
                >
                <button 
                    type="submit" 
                    class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition duration-300 ease-in-out"
                >
                    Search
                </button>
            </div>
        </form>

        <!-- Séminaires Table -->
        <div class="overflow-x-auto bg-gray-800 p-4 rounded-lg">
            <table class="min-w-full text-left table-auto text-gray-100">
                <thead>
                    <tr class="border-b border-gray-600">
                        <th class="py-2 px-4">Thème</th>
                        <th class="py-2 px-4">Date Début</th>
                        <th class="py-2 px-4">Date Fin</th>
                        <th class="py-2 px-4">Animateur</th>
                        <th class="py-2 px-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($seminaires as $seminaire)
                        <tr class="border-b border-gray-600">
                            <td class="py-2 px-4">{{ $seminaire->theme }}</td>
                            <td class="py-2 px-4">{{ $seminaire->date_debut }}</td>
                            <td class="py-2 px-4">{{ $seminaire->date_fin }}</td>
                            <td class="py-2 px-4">{{ $seminaire->animateur->nom ?? 'No Animateur' }}</td>
                            <td class="py-2 px-4 flex space-x-2">
                                <!-- Edit -->
                                <a href="{{ route('seminaires.edit', $seminaire->id) }}" class="px-3 py-1 bg-yellow-600 text-white rounded hover:bg-yellow-700">Edit</a>
                                <!-- Delete -->
                                <form action="{{ route('seminaires.destroy', $seminaire->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete the seminar: {{ $seminaire->theme }}?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-4 text-center text-gray-400">No séminaires found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="mt-4">
            {{ $seminaires->links() }}
        </div>
    </div>
</x-app-layout>
