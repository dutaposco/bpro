@extends('layouts.app')

@section('title', 'Video Tutorials - BPRO')

@section('content')
    <!-- Page Header -->
    <section class="bg-gradient-to-br from-red-700 to-red-800 text-white py-10 md:py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-5xl font-bold mb-4">Video Tutorials</h1>
            <p class="text-lg text-red-100">Learn football techniques from free and premium video content</p>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="py-8 bg-gray-50 border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap gap-4 items-center">
                <span class="text-gray-700 font-semibold">Filter:</span>
                <button class="px-6 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 font-semibold">All</button>
                <button class="px-6 py-2 bg-white border-2 border-red-600 text-red-600 rounded-lg hover:bg-red-50 font-semibold">Free</button>
                <button class="px-6 py-2 bg-white border-2 border-gray-300 text-gray-700 rounded-lg hover:bg-gray-100 font-semibold">Premium</button>
            </div>
        </div>
    </section>

    <!-- Free Videos Section -->
    @if($freeVideos->count() > 0)
    <section class="py-12 md:py-14">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-3">📺 Free Videos</h2>
                <p class="text-gray-600 text-lg">Access thousands of free training tutorials to improve your skills</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($freeVideos as $video)
                    <a href="{{ route('videos.show', $video->slug) }}" class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 group border-t-4 border-red-600">
                        <div class="relative overflow-hidden bg-gray-900 h-56">
                            <img src="{{ $video->thumbnail }}" alt="{{ $video->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition flex items-center justify-center">
                                <div class="bg-red-600 text-white rounded-full p-4 opacity-0 group-hover:opacity-100 transition">
                                    ▶
                                </div>
                            </div>
                            <span class="absolute top-3 right-3 bg-green-500 text-white px-4 py-1 rounded-full text-xs font-bold">FREE</span>
                            <span class="absolute bottom-3 right-3 bg-black text-white px-3 py-1 rounded text-xs font-semibold">{{ ceil($video->duration / 60) }} min</span>
                        </div>
                        <div class="p-5">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="text-xs bg-red-100 text-red-600 px-3 py-1 rounded-full font-semibold">{{ $video->category }}</span>
                                <span class="text-xs bg-gray-100 text-gray-600 px-3 py-1 rounded-full font-semibold">{{ $video->level }}</span>
                            </div>
                            <h3 class="font-bold text-gray-900 mb-2 group-hover:text-red-600 transition text-sm line-clamp-2">{{ $video->title }}</h3>
                            <p class="text-sm text-gray-600 line-clamp-2">{{ $video->description }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- Paid Videos Section -->
    @if($paidVideos->count() > 0)
    <section class="py-12 md:py-14 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-3">🔒 Premium Videos</h2>
                <p class="text-gray-600 text-lg">Exclusive in-depth content from professional coaches</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($paidVideos as $video)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 group border-t-4 border-red-600">
                        <div class="relative overflow-hidden bg-gray-900 h-56">
                            <img src="{{ $video->thumbnail }}" alt="{{ $video->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300 opacity-70">
                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition flex items-center justify-center">
                                <div class="bg-red-600 text-white rounded-full p-4 opacity-0 group-hover:opacity-100 transition">
                                    🔒
                                </div>
                            </div>
                            <span class="absolute top-3 right-3 bg-red-600 text-white px-4 py-1 rounded-full text-xs font-bold">PREMIUM</span>
                            <span class="absolute bottom-3 right-3 bg-black text-white px-3 py-1 rounded text-xs font-semibold">{{ ceil($video->duration / 60) }} min</span>
                        </div>
                        <div class="p-5">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="text-xs bg-red-100 text-red-600 px-3 py-1 rounded-full font-semibold">{{ $video->category }}</span>
                                <span class="text-xs bg-gray-100 text-gray-600 px-3 py-1 rounded-full font-semibold">{{ $video->level }}</span>
                            </div>
                            <h3 class="font-bold text-gray-900 mb-2 text-sm line-clamp-2">{{ $video->title }}</h3>
                            <p class="text-sm text-gray-600 line-clamp-2 mb-4">{{ $video->description }}</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-red-600">${{ number_format($video->price / 100, 2) }}</span>
                                @auth
                                    <a href="{{ route('videos.show', $video->slug) }}" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition text-sm font-semibold">
                                        View
                                    </a>
                                @else
                                    <a href="{{ route('login') }}" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition text-sm font-semibold">
                                        Login
                                    </a>
                                @endauth
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
@endsection
