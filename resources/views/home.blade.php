@extends('layouts.app')

@section('title', 'Home - BPRO')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-red-700 to-red-800 text-white py-14 md:py-18">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">Become a Professional Footballer</h1>
                    <p class="text-lg md:text-xl mb-8 text-red-100">Join thousands of players who transformed their dreams into reality with BPRO's professional training resources.</p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('programs') }}" class="bg-white text-red-600 px-8 py-4 rounded-lg font-bold hover:bg-gray-50 transition text-center text-lg shadow-lg">
                            Explore Programs
                        </a>
                        <a href="{{ route('videos.index') }}" class="border-2 border-white text-white px-8 py-4 rounded-lg font-bold hover:bg-white hover:text-red-600 transition text-center text-lg">
                            Free Videos
                        </a>
                    </div>
                </div>
                <div class="hidden md:block">
                    <img src="https://bpro.nnmaa.com/BrownBrother.jpg" alt="Football" class="rounded-lg shadow-2xl">
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
