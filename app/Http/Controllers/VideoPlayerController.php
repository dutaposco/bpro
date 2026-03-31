<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\View\View;

class VideoPlayerController extends Controller
{
    public function index(): View
    {
        $freeVideos = Video::where('is_free', true)->get();
        $paidVideos = Video::where('is_free', false)->get();

        return view('videos.index', compact('freeVideos', 'paidVideos'));
    }

    public function show($slug): View
    {
        $video = Video::where('slug', $slug)->firstOrFail();

        // Check if user can watch paid video
        if (!$video->is_free && !auth()->check()) {
            return redirect()->route('login')->with('message', 'Silakan login untuk menonton video berbayar');
        }

        // Here you can add payment verification logic
        // For now, we'll allow all authenticated users to watch paid videos
        
        $relatedVideos = Video::where('category', $video->category)
            ->where('id', '!=', $video->id)
            ->limit(4)
            ->get();

        return view('videos.show', compact('video', 'relatedVideos'));
    }
}
