<x-app-layout>
    <div class="max-w-3xl mx-auto p-6 bg-gray-900 text-gray-100">
        <h2 class="text-2xl font-bold mb-6">Create New Séminaire</h2>

        <form action="{{ route('seminaires.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-bold mb-2">Thème</label>
                <input type="text" name="theme" class="w-full bg-gray-800 rounded border border-gray-600 py-2 px-4 text-gray-200" required>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-bold mb-2">Date Début</label>
                <input type="date" name="date_debut" class="w-full bg-gray-800 rounded border border-gray-600 py-2 px-4 text-gray-200" required>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-bold mb-2">Date Fin</label>
                <input type="date" name="date_fin" class="w-full bg-gray-800 rounded border border-gray-600 py-2 px-4 text-gray-200" required>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-bold mb-2">Description</label>
                <input type="text" name="description" class="w-full bg-gray-800 rounded border border-gray-600 py-2 px-4 text-gray-200" required>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-bold mb-2">Cout Journalier</label>
                <input type="number" name="cout_journalier" class="w-full bg-gray-800 rounded border border-gray-600 py-2 px-4 text-gray-200" required>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-bold mb-2">Animateur</label>
                <select name="animateur_id" class="w-full bg-gray-800 rounded border border-gray-600 py-2 px-4 text-gray-200">
                    @foreach ($animateurs as $animateur)
                        <option value="{{ $animateur->id }}">{{ $animateur->nom }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Submit</button>
        </form>
    </div>
</x-app-layout>
