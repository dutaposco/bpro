<nav x-data="{ open: false }" class="bg-white/90 backdrop-blur-md sticky top-0 z-50 border-b border-gray-100 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="flex items-center gap-3 group transition-transform hover:scale-105">
                    <div class="w-10 h-10 bg-red-600 rounded-xl flex items-center justify-center text-white shadow-lg">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"></path></svg>
                    </div>
                    <span class="text-2xl font-black text-gray-900 tracking-tighter">BPRO</span>
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-10">
                <a href="{{ route('home') }}" class="text-sm font-bold tracking-widest uppercase {{ request()->routeIs('home') ? 'text-red-600' : 'text-gray-500 hover:text-red-600' }} transition">Home</a>
                <a href="{{ route('programs') }}" class="text-sm font-bold tracking-widest uppercase {{ request()->routeIs('programs') ? 'text-red-600' : 'text-gray-500 hover:text-red-600' }} transition cursor-not-allowed opacity-50">Programs</a>
                <a href="{{ route('videos.index') }}" class="text-sm font-bold tracking-widest uppercase {{ request()->routeIs('videos.*') ? 'text-red-600' : 'text-gray-500 hover:text-red-600' }} transition">Videos</a>
            </div>

            <!-- Auth Section -->
            <div class="hidden md:flex items-center gap-6">
                @auth
                    <div class="relative" x-data="{ userOpen: false }">
                        <button @click="userOpen = !userOpen" @click.away="userOpen = false" class="flex items-center gap-3 p-1.5 pr-4 rounded-full hover:bg-gray-100 transition-all border border-gray-100 shadow-sm group">
                            <div class="h-10 w-10 rounded-full bg-gradient-to-br from-red-600 to-red-800 flex items-center justify-center text-white font-bold shadow-md border-2 border-white transition-transform group-hover:scale-105">
                                {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                            </div>
                            <div class="text-left">
                                <p class="text-xs font-black text-gray-900 leading-none mb-1">{{ auth()->user()->name }}</p>
                                <span class="text-[9px] uppercase font-black text-red-600 tracking-widest bg-red-50 px-2 py-0.5 rounded">Free Academy</span>
                            </div>
                            <svg class="w-4 h-4 text-gray-400 group-hover:text-red-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>

                        <!-- Dropdown Card -->
                        <div x-show="userOpen" 
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 scale-95"
                             x-transition:enter-end="opacity-100 scale-100"
                             class="absolute right-0 mt-3 w-72 bg-white rounded-2xl shadow-2xl border border-gray-100 py-3 z-50">
                            
                            <div class="px-5 py-3 border-b border-gray-50 mb-2">
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-[0.2em] mb-1">Account</p>
                                <p class="text-sm font-bold text-gray-900 truncate">{{ auth()->user()->email }}</p>
                            </div>

                            <a href="{{ route('profile.edit') }}" class="flex items-center gap-4 px-5 py-3.5 text-gray-700 hover:bg-gray-50 transition-colors group">
                                <div class="p-2 bg-gray-100 rounded-lg group-hover:bg-red-50 group-hover:text-red-600 transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                </div>
                                <span class="font-bold text-sm">Profile Settings</span>
                            </a>

                            <div class="px-4 my-2">
                                <a href="#" class="flex items-center justify-center gap-3 py-3 w-full bg-red-600 hover:bg-black text-white rounded-xl font-black text-[11px] uppercase tracking-widest shadow-lg shadow-red-200 hover:shadow-none transition-all">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                                    Go Premium
                                </a>
                            </div>

                            <hr class="border-gray-50 my-2">

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="flex items-center gap-4 px-5 py-3.5 w-full text-left text-gray-400 hover:text-red-600 hover:bg-red-50 transition-all group">
                                    <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                                    <span class="font-bold text-sm">Sign Out</span>
                                </button>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="text-sm font-black text-gray-500 hover:text-red-600 transition uppercase tracking-widest">Login</a>
                    <a href="{{ route('register') }}" class="bg-black text-white px-8 py-3 rounded-xl hover:bg-red-600 transition font-black text-sm uppercase tracking-widest shadow-xl hover:shadow-red-200">
                        Join Free
                    </a>
                @endauth
            </div>

            <!-- Mobile Menu Toggle -->
            <div class="md:hidden flex items-center gap-4">
                <button @click="open = !open" class="p-2 rounded-xl bg-gray-50 text-gray-900 border border-gray-100 transition-colors hover:bg-red-50 hover:text-red-600">
                    <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu Panel -->
        <div x-show="open" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             class="md:hidden pb-10 space-y-4">
            <div class="flex flex-col gap-2">
                <a href="{{ route('home') }}" class="px-4 py-4 text-lg font-bold text-gray-900 {{ request()->routeIs('home') ? 'bg-red-50 text-red-600' : '' }} rounded-2xl">Home</a>
                <a href="{{ route('programs') }}" class="px-4 py-4 text-lg font-bold text-gray-400 rounded-2xl">Programs</a>
                <a href="{{ route('videos.index') }}" class="px-4 py-4 text-lg font-bold text-gray-900 {{ request()->routeIs('videos.*') ? 'bg-red-50 text-red-600' : '' }} rounded-2xl">Videos</a>
            </div>
            
            <hr class="border-gray-100 mx-4">

            @auth
                <div class="px-4 pt-2">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="h-14 w-14 rounded-2xl bg-red-600 flex items-center justify-center text-white text-xl font-bold">
                            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                        </div>
                        <div>
                            <p class="font-black text-gray-900">{{ auth()->user()->name }}</p>
                            <span class="text-xs font-bold text-red-600 uppercase tracking-widest bg-red-50 px-2 py-0.5 rounded">Free Academy Member</span>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full py-4 bg-gray-900 text-white rounded-2xl font-black uppercase tracking-widest">Sign Out</button>
                    </form>
                </div>
            @else
                <div class="px-4 flex flex-col gap-4">
                    <a href="{{ route('login') }}" class="w-full py-4 text-center border-2 border-gray-900 font-black rounded-2xl">LOGIN</a>
                    <a href="{{ route('register') }}" class="w-full py-4 text-center bg-red-600 text-white font-black rounded-2xl">JOIN FREE</a>
                </div>
            @endauth
        </div>
    </div>
</nav>
