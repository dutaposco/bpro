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

    <!-- Filter Section with Alpine.js -->
    <section class="py-8 bg-gray-50 border-b border-gray-200" x-data="{ activeFilter: 'all' }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap gap-4 items-center">
                <span class="text-gray-700 font-semibold">Filter:</span>
                <button 
                    @click="activeFilter = 'all'" 
                    :class="activeFilter === 'all' ? 'bg-red-600 text-white border-red-600' : 'bg-white text-gray-700 border-gray-300 hover:bg-gray-100'"
                    class="px-6 py-2 rounded-lg font-semibold border-2 transition-all duration-200">
                    All
                </button>
                <button 
                    @click="activeFilter = 'free'" 
                    :class="activeFilter === 'free' ? 'bg-red-600 text-white border-red-600' : 'bg-white text-gray-700 border-gray-300 hover:bg-gray-100'"
                    class="px-6 py-2 rounded-lg font-semibold border-2 transition-all duration-200">
                    Free
                </button>
                <button 
                    @click="activeFilter = 'premium'" 
                    :class="activeFilter === 'premium' ? 'bg-red-600 text-white border-red-600' : 'bg-white text-gray-700 border-gray-300 hover:bg-gray-100'"
                    class="px-6 py-2 rounded-lg font-semibold border-2 transition-all duration-200">
                    Premium
                </button>
            </div>
        </div>

        <!-- Free & Premium Videos Container -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8">
            <!-- No Videos Placeholder -->
            @if($freeVideos->count() == 0 && $paidVideos->count() == 0)
                <div class="bg-white rounded-xl shadow-md p-12 text-center border-2 border-dashed border-gray-300">
                    <div class="text-6xl mb-4">📹</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">No Videos Available</h3>
                    <p class="text-gray-600">Please check back later for new training content.</p>
                </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Free Videos Loop -->
                @foreach($freeVideos as $video)
                    <a href="{{ route('videos.show', $video->slug) }}" 
                       x-show="activeFilter === 'all' || activeFilter === 'free'"
                       class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 group border-t-4 border-red-600 flex flex-col">
                        <div class="relative overflow-hidden bg-gray-900 h-56">
                            <img src="{{ $video->thumbnail }}" alt="{{ $video->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition flex items-center justify-center">
                                <div class="bg-red-600 text-white rounded-full p-4 shadow-lg transform scale-0 group-hover:scale-100 transition-transform duration-300">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M4.5 3a.5.5 0 00-.5.5v13a.5.5 0 00.8.4l10.5-6.5a.5.5 0 000-.8L4.8 2.6a.5.5 0 00-.3.4z"></path></svg>
                                </div>
                            </div>
                            <span class="absolute top-3 right-3 bg-green-500 text-white px-4 py-1 rounded-full text-xs font-bold shadow-sm uppercase">Free</span>
                            <span class="absolute bottom-3 right-3 bg-black/70 backdrop-blur-sm text-white px-3 py-1 rounded text-xs font-semibold">{{ ceil($video->duration / 60) }} min</span>
                        </div>
                        <div class="p-5 flex-grow">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="text-[10px] uppercase bg-red-100 text-red-600 px-3 py-1 rounded-full font-bold">{{ $video->category }}</span>
                                <span class="text-[10px] uppercase bg-gray-100 text-gray-600 px-3 py-1 rounded-full font-bold">{{ $video->level }}</span>
                            </div>
                            <h3 class="font-bold text-gray-900 mb-2 group-hover:text-red-600 transition line-clamp-2 text-lg leading-tight">{{ $video->title }}</h3>
                            <p class="text-sm text-gray-600 line-clamp-2">{{ $video->description }}</p>
                        </div>
                    </a>
                @endforeach

                <!-- Paid Videos Loop -->
                @foreach($paidVideos as $video)
                    <div x-show="activeFilter === 'all' || activeFilter === 'premium'"
                         class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 group border-t-4 border-gray-900 flex flex-col">
                        <div class="relative overflow-hidden bg-gray-900 h-56">
                            <img src="{{ $video->thumbnail }}" alt="{{ $video->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300 opacity-60">
                            <div class="absolute inset-0 bg-black bg-opacity-40 group-hover:bg-opacity-50 transition flex items-center justify-center">
                                <div class="bg-gray-900 text-white rounded-full p-4 shadow-lg">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path></svg>
                                </div>
                            </div>
                            <span class="absolute top-3 right-3 bg-red-600 text-white px-4 py-1 rounded-full text-xs font-bold shadow-sm uppercase">Premium</span>
                            <span class="absolute bottom-3 right-3 bg-black/70 backdrop-blur-sm text-white px-3 py-1 rounded text-xs font-semibold">{{ ceil($video->duration / 60) }} min</span>
                        </div>
                        <div class="p-5 flex-grow">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="text-[10px] uppercase bg-red-100 text-red-600 px-3 py-1 rounded-full font-bold">{{ $video->category }}</span>
                                <span class="text-[10px] uppercase bg-gray-100 text-gray-600 px-3 py-1 rounded-full font-bold">{{ $video->level }}</span>
                            </div>
                            <h3 class="font-bold text-gray-900 mb-2 line-clamp-2 text-lg leading-tight">{{ $video->title }}</h3>
                            <p class="text-sm text-gray-600 line-clamp-2 mb-4">{{ $video->description }}</p>
                            <div class="mt-auto flex justify-between items-center pt-4 border-t border-gray-100">
                                <span class="text-2xl font-black text-red-600">Rp{{ number_format($video->price, 0, ',', '.') }}</span>
                                @auth
                                    <a href="{{ route('videos.show', $video->slug) }}" class="bg-red-600 text-white px-5 py-2 rounded-lg hover:bg-red-700 transition shadow-md font-bold text-sm">
                                        Unlock Video
                                    </a>
                                @else
                                    <a href="{{ route('login') }}" class="bg-gray-900 text-white px-5 py-2 rounded-lg hover:bg-black transition shadow-md font-bold text-sm">
                                        Login to Purchase
                                    </a>
                                @endauth
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
