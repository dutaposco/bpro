<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $videos = [
            // Free videos
            [
                'title' => 'Basic Passing Technique',
                'slug' => 'basic-passing-technique',
                'description' => 'Learn the fundamentals of passing technique perfect for beginners in football.',
                'thumbnail' => 'https://images.unsplash.com/photo-1551958219-acbc608c6377?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'video_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
                'duration' => 1200,
                'category' => 'Technique',
                'level' => 'Beginner',
                'is_free' => true,
                'price' => 0,
            ],
            [
                'title' => 'Agility & Ball Control Drills',
                'slug' => 'agility-ball-control',
                'description' => 'Training drills to improve agility and ball control at your feet.',
                'thumbnail' => 'https://images.unsplash.com/photo-1556056504-5c7696c4c28d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'video_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
                'duration' => 900,
                'category' => 'Technique',
                'level' => 'Beginner',
                'is_free' => true,
                'price' => 0,
            ],
            [
                'title' => 'Understanding the 4-3-3 Formation',
                'slug' => 'understanding-4-3-3-formation',
                'description' => 'Understand the 4-3-3 formation and how to play effectively with this setup.',
                'thumbnail' => 'https://images.unsplash.com/photo-1508098682722-e99c43a406b2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'video_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
                'duration' => 1500,
                'category' => 'Tactics',
                'level' => 'Intermediate',
                'is_free' => true,
                'price' => 0,
            ],
            [
                'title' => 'Complete Pre-Match Warm-up',
                'slug' => 'complete-pre-match-warmup',
                'description' => 'Complete warm-up guide before matches for optimal performance.',
                'thumbnail' => 'https://images.unsplash.com/photo-1526232759583-d6f44a154bbf?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'video_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
                'duration' => 1800,
                'category' => 'Fitness',
                'level' => 'Beginner',
                'is_free' => true,
                'price' => 0,
            ],
            // Paid videos
            [
                'title' => 'Pro-Level Shooting Technique',
                'slug' => 'pro-level-shooting-technique',
                'description' => 'Professional shooting technique used by world-class players.',
                'thumbnail' => 'https://images.unsplash.com/photo-1510566337590-2fc1f21d0faa?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'video_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
                'duration' => 2400,
                'category' => 'Technique',
                'level' => 'Advanced',
                'is_free' => false,
                'price' => 49999,
            ],
            [
                'title' => 'Advanced 3D Attack Strategies',
                'slug' => 'advanced-3d-attack-strategies',
                'description' => 'Learn three-dimensional attack strategies to break through opponent defense.',
                'thumbnail' => 'https://images.unsplash.com/photo-1431324155629-1a6eda1eedfa?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'video_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
                'duration' => 3600,
                'category' => 'Tactics',
                'level' => 'Advanced',
                'is_free' => false,
                'price' => 99999,
            ],
            [
                'title' => 'Elite Athlete Fitness Program',
                'slug' => 'elite-athlete-fitness-program',
                'description' => 'Special fitness program used by international elite athletes.',
                'thumbnail' => 'https://images.unsplash.com/photo-1517466787929-bc90951d0974?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'video_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
                'duration' => 4500,
                'category' => 'Fitness',
                'level' => 'Advanced',
                'is_free' => false,
                'price' => 149999,
            ],
            [
                'title' => 'Game Psychology & Mental Toughness',
                'slug' => 'game-psychology-mental-toughness',
                'description' => 'Master game psychology and build champion-level mental toughness.',
                'thumbnail' => 'https://images.unsplash.com/photo-1574629810360-7efbbe195018?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'video_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
                'duration' => 3000,
                'category' => 'Mental',
                'level' => 'Advanced',
                'is_free' => false,
                'price' => 79999,
            ],
            [
                'title' => 'Professional Match Analysis',
                'slug' => 'professional-match-analysis',
                'description' => 'Learn to analyze matches like a professional coach.',
                'thumbnail' => 'https://images.unsplash.com/photo-1575361204480-aadea25e6e68?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'video_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
                'duration' => 2700,
                'category' => 'Tactics',
                'level' => 'Intermediate',
                'is_free' => false,
                'price' => 69999,
            ],
        ];

        foreach ($videos as $video) {
            Video::firstOrCreate(['slug' => $video['slug']], $video);
        }
    }
}
