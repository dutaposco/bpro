@extends('layouts.app')

@section('title', 'Home - BPRO')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-red-700 to-red-800 text-white py-0 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-0 items-center min-h-[500px]">
                <div class="py-16 md:py-24 pr-0 md:pr-12">
                    <h1 class="text-5xl md:text-7xl font-extrabold mb-6 leading-tight uppercase tracking-tighter">Become a <span class="text-black bg-white px-2">Professional</span> Footballer</h1>
                    <p class="text-lg md:text-2xl mb-10 text-red-100 font-medium max-w-xl">Join thousands of players who transformed their dreams into reality with BPRO's professional training resources.</p>
                    <div class="flex flex-col sm:flex-row gap-5">
                        <a href="{{ route('programs') }}" class="bg-white text-red-700 px-10 py-5 rounded-full font-black hover:bg-black hover:text-white transition-all transform hover:scale-105 text-center text-xl shadow-2xl">
                            EXPLORE PROGRAMS
                        </a>
                        <a href="{{ route('videos.index') }}" class="bg-transparent border-2 border-white text-white px-10 py-5 rounded-full font-black hover:bg-red-900 transition-all text-center text-xl">
                            FREE VIDEOS
                        </a>
                    </div>
                </div>
                <div class="h-full hidden md:flex items-stretch">
                    <img src="https://bpro.nnmaa.com/BrownBrother.jpg" alt="Jack and George Brown" class="w-full h-full object-cover shadow-2xl scale-110 origin-center transform motion-safe:hover:scale-105 transition-all">
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section class="py-12 md:py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Our Training Programs</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">Choose the program that matches your level and goals. Professional coaching for every skill level.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($programs as $program)
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 border border-gray-100 group">
                        <div class="overflow-hidden h-52 bg-gray-200">
                            <img src="{{ $program['image'] }}"
                                 alt="{{ $program['title'] }}"
                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-black text-gray-900 mb-2 group-hover:text-red-600 transition-colors">{{ $program['title'] }}</h3>
                            <p class="text-gray-500 text-sm leading-relaxed mb-6">{{ $program['description'] }}</p>
                            <a href="{{ route('programs') }}" class="block w-full bg-red-600 hover:bg-red-700 text-white py-3 rounded-xl transition-colors font-bold text-center text-sm">
                                Lihat Program
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-16">
                <a href="{{ route('programs') }}" class="text-red-600 font-bold text-lg hover:text-red-700 transition inline-flex items-center gap-2">
                    View All Programs <span class="text-xl">→</span>
                </a>
            </div>
        </div>
    </section>
@endsection
