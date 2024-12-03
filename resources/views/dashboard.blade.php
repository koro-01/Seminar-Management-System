<x-app-layout>
    <div class="min-h-screen bg-gray-900 text-gray-100">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-100 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-green-400 border-b border-gray-700">
                        {{ __("You're logged in!") }}
                    </div>
                    
                    <!-- Links to manage tables and search -->
                    <div class="p-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                        <a href="{{ route('animateurs.index') }}" class="inline-block px-4 py-2 bg-gray-700 text-gray-100 rounded-md transition duration-300 ease-in-out hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50 text-center">Manage Animateurs</a>
                        <a href="{{ route('seminaires.index') }}" class="inline-block px-4 py-2 bg-gray-700 text-gray-100 rounded-md transition duration-300 ease-in-out hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50 text-center">Manage Seminaires</a>
                        <a href="{{ route('activites.index') }}" class="inline-block px-4 py-2 bg-gray-700 text-gray-100 rounded-md transition duration-300 ease-in-out hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50 text-center">Manage Activites</a>
                        <a href="{{ route('membres.index') }}" class="inline-block px-4 py-2 bg-gray-700 text-gray-100 rounded-md transition duration-300 ease-in-out hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50 text-center">Manage Membres</a>
                        <a href="{{ route('reservations.index') }}" class="inline-block px-4 py-2 bg-gray-700 text-gray-100 rounded-md transition duration-300 ease-in-out hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50 text-center">Manage Reservations</a>
                        <a href="{{ route('seminaires.search') }}" class="inline-block px-4 py-2 bg-gray-700 text-gray-100 rounded-md transition duration-300 ease-in-out hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50 text-center">Search Seminaires</a>
                        <a href="{{ route('membres.search') }}" class="inline-block px-4 py-2 bg-gray-700 text-gray-100 rounded-md transition duration-300 ease-in-out hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50 text-center">Search Membres</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

