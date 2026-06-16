<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6;
        }
    </style>
</head>

<body class="text-gray-800 antialiased min-h-screen flex flex-col">
    @auth
        <nav class="bg-indigo-600 shadow-md">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <a href="{{ route('buku.index') }}"
                            class="text-white font-bold text-xl tracking-wider">Praktikum-<span
                                class="text-indigo-200">7</span></a>
                    </div>
                    <div class="flex items-center space-x-4">
                        <span class="text-indigo-100 text-sm">Halo, {{ Auth::user()->username }}!</span>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="bg-indigo-500 hover:bg-indigo-700 text-white px-4 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out shadow-sm">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    @endauth

    <main class="flex-grow flex flex-col justify-center py-10 px-4 sm:px-6 lg:px-8">
        @yield('content')
    </main>

    <footer class="bg-white border-t border-gray-200 py-6 text-center text-sm text-gray-500 mt-auto">
        &copy; {{ date('Y') }} Praktikum-7. All rights reserved.
    </footer>
</body>

</html>
