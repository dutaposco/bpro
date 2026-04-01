<x-guest-layout>
    @section('title', 'Join Academy')

    <div class="mb-8 text-center">
        <h2 class="text-3xl font-extrabold text-gray-900 leading-tight">Start Your Journey</h2>
        <p class="text-gray-500 mt-2">Join the BPRO elite academy and level up your football skills.</p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-5">
        @csrf

        <!-- Name -->
        <div>
            <label for="name" class="block text-sm font-bold text-gray-700 mb-2">Full Name</label>
            <div class="relative group">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400 group-focus-within:text-red-600 transition-colors">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>
                <input id="name" 
                       class="block w-full pl-10 pr-4 py-3 bg-gray-50 border-gray-200 border-2 rounded-xl focus:border-red-600 focus:ring-4 focus:ring-red-100 transition-all outline-none text-gray-900 font-semibold" 
                       type="text" name="name" :value="old('name')" required autofocus />
            </div>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-sm font-bold text-gray-700 mb-2">Email Address</label>
            <div class="relative group">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400 group-focus-within:text-red-600 transition-colors">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <input id="email" 
                       class="block w-full pl-10 pr-4 py-3 bg-gray-50 border-gray-200 border-2 rounded-xl focus:border-red-600 focus:ring-4 focus:ring-red-100 transition-all outline-none text-gray-900 font-semibold" 
                       type="email" name="email" :value="old('email')" required />
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-bold text-gray-700 mb-2">Choose Password</label>
            <div class="relative group">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400 group-focus-within:text-red-600 transition-colors">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 118 0v2H4V7a4 4 0 118 0v2z" />
                    </svg>
                </div>
                <input id="password" 
                       class="block w-full pl-10 pr-4 py-3 bg-gray-50 border-gray-200 border-2 rounded-xl focus:border-red-600 focus:ring-4 focus:ring-red-100 transition-all outline-none text-gray-900 font-semibold" 
                       type="password" name="password" required autocomplete="new-password" />
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div>
            <label for="password_confirmation" class="block text-sm font-bold text-gray-700 mb-2">Confirm Password</label>
            <div class="relative group">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400 group-focus-within:text-red-600 transition-colors">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <input id="password_confirmation" 
                       class="block w-full pl-10 pr-4 py-3 bg-gray-50 border-gray-200 border-2 rounded-xl focus:border-red-600 focus:ring-4 focus:ring-red-100 transition-all outline-none text-gray-900 font-semibold" 
                       type="password" name="password_confirmation" required />
            </div>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="pt-2">
            <button type="submit" class="w-full bg-red-600 hover:bg-black text-white font-bold py-4 rounded-xl shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all active:scale-95 text-lg uppercase tracking-widest text-sm">
                CREATE ACCOUNT
            </button>
        </div>

        <div class="text-center mt-6">
            <p class="text-sm text-gray-600 font-semibold">
                Already have an account? 
                <a href="{{ route('login') }}" class="text-red-600 hover:text-red-700 font-black ml-1 uppercase text-xs tracking-wider">Sign In Here</a>
            </p>
        </div>
    </form>
</x-guest-layout>
