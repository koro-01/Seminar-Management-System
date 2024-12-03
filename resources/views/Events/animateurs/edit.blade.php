<x-app-layout>
    <div class="min-h-screen bg-gray-900 text-gray-100">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-100 leading-tight">
                {{ __('Edit Animateur') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-100">
                        <!-- Back Button -->
                        <div class="mb-4">
                            <a href="{{ route('animateurs.index') }}" 
                               class="inline-block px-4 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700 transition duration-300 ease-in-out">
                               Back to List
                            </a>
                        </div>

                        <!-- Edit Form -->
                        <form action="{{ route('animateurs.update', $animateur->id) }}" method="POST" class="space-y-6">
                            @csrf
                            @method('PUT')

                            <!-- Nom -->
                            <div>
                                <label for="nom" class="block text-sm font-medium">Nom</label>
                                <input type="text" name="nom" id="nom" value="{{ old('nom', $animateur->nom) }}" required
                                    class="w-full px-4 py-2 rounded-md bg-gray-700 text-white focus:outline-none focus:ring focus:ring-blue-500">
                            </div>

                            <!-- Prenom -->
                            <div>
                                <label for="prenom" class="block text-sm font-medium">Prenom</label>
                                <input type="text" name="prenom" id="prenom" value="{{ old('prenom', $animateur->prenom) }}" required
                                    class="w-full px-4 py-2 rounded-md bg-gray-700 text-white focus:outline-none focus:ring focus:ring-blue-500">
                            </div>

                            <!-- Telephone -->
                            <div>
                                <label for="telephone" class="block text-sm font-medium">Telephone</label>
                                <input type="text" name="telephone" id="telephone" value="{{ old('telephone', $animateur->telephone) }}" required
                                    class="w-full px-4 py-2 rounded-md bg-gray-700 text-white focus:outline-none focus:ring focus:ring-blue-500">
                            </div>

                            <!-- Specialite -->
                            <div>
                                <label for="specialite" class="block text-sm font-medium">Specialite</label>
                                <input type="text" name="specialite" id="specialite" value="{{ old('specialite', $animateur->specialite) }}" required
                                    class="w-full px-4 py-2 rounded-md bg-gray-700 text-white focus:outline-none focus:ring focus:ring-blue-500">
                            </div>

                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-sm font-medium">Email</label>
                                <input type="email" name="email" id="email" value="{{ old('email', $animateur->email) }}" required
                                    class="w-full px-4 py-2 rounded-md bg-gray-700 text-white focus:outline-none focus:ring focus:ring-blue-500">
                            </div>

                            <!-- Submit Button -->
                            <div>
                                <button type="submit"
                                    class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-300 ease-in-out">
                                    Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
