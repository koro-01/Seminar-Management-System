<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    @vite('resources/css/app.css') <!-- This is for Tailwind CSS if you're using it -->
</head>
<body class="bg-gray-100">

    <!-- Navigation Bar -->
    <nav class="bg-gray-800 text-white p-4">
        <div class="container mx-auto flex justify-between">
            <div>
                <a href="/" class="text-xl font-semibold">My Project</a>
            </div>
            <div class="flex space-x-4">
                @if (Route::has('login'))
                    @auth
                        <!-- If user is logged in, show the dashboard link -->
                        <a href="{{ url('/dashboard') }}" class="text-white hover:text-gray-400">Dashboard</a>
                    @else
                        <!-- If user is not logged in, show Login and Register links -->
                        <a href="{{ route('login') }}" class="text-white hover:text-gray-400">Login</a>
                        <a href="{{ route('register') }}" class="text-white hover:text-gray-400">Register</a>
                    @endauth
                @endif
            </div>
        </div>
    </nav>

    <!-- Main Content Section -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl font-semibold">Welcome to the Main Page!</h1>
                    <p class="mt-4">You can now manage Animateurs, Membres, and Seminaires.</p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
