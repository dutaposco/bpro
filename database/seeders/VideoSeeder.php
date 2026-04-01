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
                'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/92/Youth-soccer-indiana.jpg/800px-Youth-soccer-indiana.jpg',
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
                'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/18/Football_pitch.jpg/800px-Football_pitch.jpg',
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
                'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/USA_Soccer_Women%27s_National_Team_warm-up.jpg/800px-USA_Soccer_Women%27s_National_Team_warm-up.jpg',
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
                'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/FC_Barcelona_training_session_%281%29.jpg/800px-FC_Barcelona_training_session_%281%29.jpg',
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
                'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8e/Goalkeeper_in_training.jpg/800px-Goalkeeper_in_training.jpg',
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
                'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Futbol_con_tacticas.jpg/800px-Futbol_con_tacticas.jpg',
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
                'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/A_small_cup_of_coffee.JPG/800px-A_small_cup_of_coffee.JPG',
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
                'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/92/Youth-soccer-indiana.jpg/800px-Youth-soccer-indiana.jpg',
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
                'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/18/Football_pitch.jpg/800px-Football_pitch.jpg',
                'video_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
                'duration' => 2700,
                'category' => 'Tactics',
                'level' => 'Intermediate',
                'is_free' => false,
                'price' => 69999,
            ],
        ];

        foreach ($videos as $video) {
            Video::updateOrCreate(['slug' => $video['slug']], $video);
        }
    }
}
