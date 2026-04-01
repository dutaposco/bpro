@extends('layouts.app')

@section('title', $video->title . ' - BPRO')

@section('content')
    <!-- Video Player Section -->
    <section class="bg-gray-900 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Video Embed -->
            <div class="bg-black rounded-lg overflow-hidden mb-8 shadow-2xl">
                <div class="aspect-video bg-black flex items-center justify-center">
                    @if(str_contains($video->video_url, 'youtube'))
                        {!! str_replace('youtube.com/embed/', 'youtube.com/embed/', $video->video_url) !!}
                    @else
                        <iframe width="100%" height="100%" src="{{ $video->video_url }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    @endif
                </div>
            </div>

            <!-- Video Info -->
            <div class="bg-white rounded-lg p-8 mb-8 shadow-lg">
                <div class="flex flex-col md:flex-row justify-between items-start gap-4 mb-6">
                    <div>
                        <h1 class="text-4xl font-bold text-gray-900 mb-4">{{ $video->title }}</h1>
                        <div class="flex flex-wrap gap-3">
                            <span class="text-xs bg-red-100 text-red-600 px-4 py-2 rounded-full font-semibold">{{ $video->category }}</span>
                            <span class="text-xs bg-gray-100 text-gray-600 px-4 py-2 rounded-full font-semibold">{{ $video->level }}</span>
                            @if($video->is_free)
                                <span class="text-xs bg-green-100 text-green-600 px-4 py-2 rounded-full font-bold">FREE</span>
                            @else
                                <span class="text-xs bg-red-600 text-white px-4 py-2 rounded-full font-bold">🔒 PREMIUM</span>
                            @endif
                        </div>
                    </div>
                    <div class="text-right">
                        @if(!$video->is_free && !auth()->check())
                            <button class="bg-red-600 text-white px-8 py-4 rounded-lg hover:bg-red-700 transition font-bold text-lg">
                                ${  number_format($video->price / 100, 2) }} - Unlock Access
                            </button>
                        @else
                            <div class="text-sm text-gray-600 bg-gray-50 px-4 py-2 rounded-lg">
                                <span class="text-2xl font-bold text-gray-900">{{ ceil($video->duration / 60) }}</span> min
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Description -->
                <div class="border-t border-gray-200 pt-6">
                    <h2 class="text-xl font-bold text-gray-900 mb-3">Video Description</h2>
                    <p class="text-gray-700 leading-relaxed text-lg">{{ $video->description }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Videos Section -->
    @if($relatedVideos->count() > 0)
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-12">Related Videos</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($relatedVideos as $related)
                    <a href="{{ route('videos.show', $related->slug) }}" class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition group">
                        <div class="relative overflow-hidden bg-gray-900 h-40">
                            <img src="{{ $related->thumbnail }}" alt="{{ $related->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition flex items-center justify-center">
                                <div class="bg-red-600 text-white rounded-full p-3 opacity-0 group-hover:opacity-100 transition">
                                    ▶
                                </div>
                            </div>
                            @if(!$related->is_free)
                                <span class="absolute top-2 right-2 bg-red-600 text-white px-3 py-1 rounded text-xs font-bold">🔒</span>
                            @endif
                            <span class="absolute bottom-2 right-2 bg-black text-white px-3 py-1 rounded text-xs font-semibold">{{ ceil($related->duration / 60) }} min</span>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-gray-900 text-sm mb-2 line-clamp-2 group-hover:text-red-600 transition">{{ $related->title }}</h3>
                            <div class="flex gap-2">
                                <span class="text-xs bg-red-100 text-red-600 px-2 py-1 rounded font-semibold">{{ $related->category }}</span>
                                <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded font-semibold">{{ $related->level }}</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    @endif
@endsection
