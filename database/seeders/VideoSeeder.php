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
                'thumbnail' => 'https://img.okeinfo.net/content/2023/12/30/38/2947116/george-brown-jack-brown-bersinar-di-persita-tangerang-mampukah-keduanya-tembus-skuad-timnas-indonesia-asuhan-shin-tae-yong-7Nisv5i73e.jpg',
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
                'thumbnail' => 'https://media.suara.com/pictures/653x366/2023/11/24/60228-george-brown-dan-jack-brown-di-persita-tangerang.jpg',
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
                'thumbnail' => 'https://static.republika.co.id/uploads/images/inpicture_slide/selebrasi-pemain-pusamania-borneo-fc-jack-brown-tengah-saat_220311094038-726.jpg',
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
                'thumbnail' => 'https://images2.jawapos.com/jawapos/uploads/2023/09/20/george-brown-persebaya.jpg',
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
                'thumbnail' => 'https://www.bolasport.com/media/player/george-brown/655c650130f14.jpg',
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
                'thumbnail' => 'https://akcdn.detik.net.id/visual/2017/04/18/69599525-412f-4886-af3b-9e4726bf690f_169.jpg?w=700&q=90',
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
                'thumbnail' => 'https://www.bolasport.com/media/player/jack-brown/655c3c0aa13cb.jpg',
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
                'thumbnail' => 'https://awsimages.detik.net.id/community/media/visual/2021/11/04/jack-brown-saat-diperkenalkan-sebagai-pemain-persita-tangerang-instagrampersitafc_169.jpeg?w=700&q=90',
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
                'thumbnail' => 'https://thumb.viva.co.id/media/frontend/thumbs3/2021/12/28/61cad998901fb-pemain-persita-tangerang-jack-brown_1265_711.jpg',
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
