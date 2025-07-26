<!DOCTYPE html>
<html lang="id" class="h-full bg-gray-50">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SampahBijak')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full font-sans antialiased bg-gray-50 text-gray-900">

    <!-- Navbar -->
    <nav class="bg-green-700 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <a href="/" class="text-white text-xl font-semibold">SampahBijak</a>
                </div>
                <div class="flex space-x-4">
                    <a href="/" class="text-white hover:bg-green-600 px-3 py-2 rounded-md text-sm font-medium">Beranda</a>
                    <a href="/about" class="text-white hover:bg-green-600 px-3 py-2 rounded-md text-sm font-medium">Tentang Kami</a>
                    <a href="/contact" class="text-white hover:bg-green-600 px-3 py-2 rounded-md text-sm font-medium">Kontak</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="min-h-screen py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-green-700 text-white py-4">
        <div class="max-w-7xl mx-auto text-center">
            <p>&copy; 2025 SampahBijak. Semua hak dilindungi.</p>
        </div>
    </footer>

</body>

</html>
