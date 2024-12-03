<x-app-layout>
    <div class="max-w-3xl mx-auto p-6 bg-gray-900 text-gray-100">
        <h2 class="text-2xl font-bold mb-6">Edit Séminaire</h2>

        <form action="{{ route('seminaires.update', $seminaire->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-sm font-bold mb-2">Thème</label>
                <input 
                    type="text" 
                    name="theme" 
                    value="{{ old('thème', $seminaire->theme) }}" 
                    class="w-full bg-gray-800 rounded border border-gray-600 py-2 px-4 text-gray-200" 
                    required
                >
            </div>

            <div class="mb-4">
                <label class="block text-sm font-bold mb-2">Date Début</label>
                <input 
                    type="date" 
                    name="date_debut" 
                    value="{{ old('date_debut', $seminaire->date_debut) }}" 
                    class="w-full bg-gray-800 rounded border border-gray-600 py-2 px-4 text-gray-200" 
                    required
                >
            </div>

            <div class="mb-4">
                <label class="block text-sm font-bold mb-2">Date Fin</label>
                <input 
                    type="date" 
                    name="date_fin" 
                    value="{{ old('date_fin', $seminaire->date_fin) }}" 
                    class="w-full bg-gray-800 rounded border border-gray-600 py-2 px-4 text-gray-200" 
                    required
                >
            </div>

            <div class="mb-4">
                <label class="block text-sm font-bold mb-2">Description</label>
                <textarea 
                    name="description" 
                    class="w-full bg-gray-800 rounded border border-gray-600 py-2 px-4 text-gray-200" 
                    rows="4"
                >{{ old('description', $seminaire->description) }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-bold mb-2">Coût Journalier</label>
                <input 
                    type="number" 
                    name="cout_journalier" 
                    value="{{ old('cout_journalier', $seminaire->cout_journalier) }}" 
                    step="0.01" 
                    class="w-full bg-gray-800 rounded border border-gray-600 py-2 px-4 text-gray-200" 
                    required
                >
            </div>

            <div class="mb-4">
                <label class="block text-sm font-bold mb-2">Animateur</label>
                <select 
                    name="animateur_id" 
                    class="w-full bg-gray-800 rounded border border-gray-600 py-2 px-4 text-gray-200"
                >
                    @foreach ($animateurs as $animateur)
                        <option 
                            value="{{ $animateur->id }}" 
                            {{ $seminaire->animateur_id == $animateur->id ? 'selected' : '' }}
                        >
                            {{ $animateur->nom }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Save Changes</button>
        </form>
    </div>
</x-app-layout>
