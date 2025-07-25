<header class="bg-green-700 text-white shadow-md">
    <div class="container mx-auto px-4 py-4 flex items-center justify-between">
        <a href="#" class="text-xl font-bold">SampleApp</a>
        <button class="md:hidden block" id="nav-toggle">
            <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <nav id="nav-menu" class="hidden md:flex space-x-6 text-sm font-medium">
        <a href="/" class="hover:text-green-200">Home</a>
        <a href="/about" class="hover:text-green-200">About</a>
        <a href="/contact" class="hover:text-green-200">Contact</a>
    </nav>

    <!-- Mobile menu -->
    <div id="nav-mobile" class="hidden md:hidden block">
        <a href="/" class="block hover:text-green-200">Home</a>
        <a href="/about" class="block hover:text-green-200">About</a>
        <a href="/contact" class="block hover:text-green-200">Contact</a>
    </div>
</header>

<script>
    document.getElementById('nav-toggle').addEventListener('click', function() {
        const navMenu = document.getElementById('nav-mobile');
        navMenu.classList.toggle('hidden');
    });
</script>
