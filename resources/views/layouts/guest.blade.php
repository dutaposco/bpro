<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', 'Welcome') - {{ config('app.name', 'BPRO') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <style>
            body { font-family: 'Outfit', sans-serif; }
            .auth-bg {
                background: linear-gradient(135deg, #991b1b 0%, #450a0a 100%);
                position: relative;
                overflow: hidden;
            }
            .auth-bg::before {
                content: '';
                position: absolute;
                top: 0; left: 0; right: 0; bottom: 0;
                background-image: url('https://images.unsplash.com/photo-1574629810360-7efbbe195018?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
                background-size: cover;
                background-position: center;
                opacity: 0.15;
                filter: grayscale(100%);
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 auth-bg">
            <div class="relative z-10 w-full sm:max-w-md">
                <div class="text-center mb-10">
                    <a href="/" class="inline-flex items-center gap-2 group">
                        <div class="bg-white p-2 rounded-xl shadow-2xl group-hover:scale-110 transition-transform">
                            <svg class="w-10 h-10 text-red-600" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"></path></svg>
                        </div>
                        <span class="text-4xl font-extrabold text-white tracking-tighter">BPRO</span>
                    </a>
                </div>

                <div class="w-full bg-white/95 backdrop-blur-sm px-8 py-10 shadow-2xl overflow-hidden rounded-2xl border border-white/20">
                    {{ $slot }}
                </div>
                
                <p class="text-center mt-8 text-red-100/60 text-sm">
                    &copy; {{ date('Y') }} BPRO Professional Football Academy. All rights reserved.
                </p>
            </div>
        </div>
    </body>
</html>
