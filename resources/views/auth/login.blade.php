<x-guest-layout>
    @section('title', 'Sign In')

    <div class="mb-8 text-center">
        <h2 class="text-3xl font-extrabold text-gray-900 leading-tight">Welcome Back!</h2>
        <p class="text-gray-500 mt-2">Enter your credentials to access your BPRO academy account.</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-6 p-4 bg-red-50 text-red-700 rounded-xl border border-red-100" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-sm font-bold text-gray-700 mb-2">Email Address</label>
            <div class="relative group">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400 group-focus-within:text-red-600 transition-colors">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.206" />
                    </svg>
                </div>
                <input id="email" 
                       class="block w-full pl-10 pr-4 py-3 bg-gray-50 border-gray-200 border-2 rounded-xl focus:border-red-600 focus:ring-4 focus:ring-red-100 transition-all outline-none text-gray-900 font-semibold" 
                       type="email" name="email" :value="old('email')" required autofocus />
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <div class="flex justify-between items-center mb-2">
                <label for="password" class="block text-sm font-bold text-gray-700">Password</label>
                @if (Route::has('password.request'))
                    <a class="text-xs font-bold text-red-600 hover:text-red-700" href="{{ route('password.request') }}">
                        Forgot Password?
                    </a>
                @endif
            </div>
            <div class="relative group">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400 group-focus-within:text-red-600 transition-colors">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 118 0v2H4V7a4 4 0 118 0v2z" />
                    </svg>
                </div>
                <input id="password" 
                       class="block w-full pl-10 pr-4 py-3 bg-gray-50 border-gray-200 border-2 rounded-xl focus:border-red-600 focus:ring-4 focus:ring-red-100 transition-all outline-none text-gray-900 font-semibold" 
                       type="password" name="password" required autocomplete="current-password" />
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center">
            <input id="remember_me" type="checkbox" class="w-5 h-5 rounded border-gray-300 text-red-600 focus:ring-red-500 bg-gray-50 pointer-cursor" name="remember">
            <label for="remember_me" class="ml-3 text-sm font-semibold text-gray-600 cursor-pointer">Keep me signed in</label>
        </div>

        <div>
            <button type="submit" class="w-full bg-red-600 hover:bg-black text-white font-bold py-4 rounded-xl shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all active:scale-95 text-lg uppercase tracking-widest text-sm">
                LOG IN TO BPRO
            </button>
        </div>
        
        <div class="relative flex items-center justify-center my-8">
            <div class="flex-grow border-t border-gray-100"></div>
            <span class="mx-4 text-xs text-gray-400 uppercase font-black tracking-widest">New to BPRO?</span>
            <div class="flex-grow border-t border-gray-100"></div>
        </div>

        <a href="{{ route('register') }}" class="block w-full text-center border-2 border-gray-900 text-gray-900 hover:bg-gray-900 hover:text-white font-bold py-3 rounded-xl transition-all uppercase tracking-widest text-xs">
            Create Academy Account
        </a>
    </form>
</x-guest-layout>
