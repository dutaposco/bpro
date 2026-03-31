<nav class="bg-white shadow-md sticky top-0 z-50 border-b-4 border-red-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="text-2xl font-bold text-red-600">
                    <span class="flex items-center gap-2">
                        <span class="w-8 h-8 bg-red-600 rounded-full flex items-center justify-center text-white font-bold">⚽</span>
                        BPRO
                    </span>
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-red-600 transition font-medium">Home</a>
                <a href="{{ route('programs') }}" class="text-gray-700 hover:text-red-600 transition font-medium">Programs</a>
                <a href="{{ route('videos.index') }}" class="text-gray-700 hover:text-red-600 transition font-medium">Videos</a>
            </div>

            <!-- Auth & CTA Button -->
            <div class="hidden md:flex items-center gap-4">
                @auth
                    <div class="flex items-center gap-4">
                        <span class="text-gray-700">{{ auth()->user()->name }}</span>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="text-gray-700 hover:text-red-600 transition">Logout</button>
                        </form>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="text-gray-700 hover:text-red-600 transition">Login</a>
                    <a href="{{ route('register') }}" class="bg-red-600 text-white px-6 py-2 rounded-lg hover:bg-red-700 transition font-semibold">
                        Sign Up
                    </a>
                @endauth
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center gap-4">
                @auth
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-gray-700 text-sm">Logout</button>
                    </form>
                @else
                    <a href="{{ route('register') }}" class="bg-red-600 text-white px-3 py-2 rounded-lg text-sm font-semibold">
                        Sign Up
                    </a>
                @endauth
                <button id="mobile-menu-btn" class="text-gray-700 text-2xl">
                    ☰
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden pb-4 space-y-2">
            <a href="{{ route('home') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded">Home</a>
            <a href="{{ route('programs') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded">Programs</a>
            <a href="{{ route('videos.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded">Videos</a>
            @guest
                <a href="{{ route('login') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded">Login</a>
            @endguest
        </div>
    </div>
</nav>

<script>
    document.getElementById('mobile-menu-btn').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>
