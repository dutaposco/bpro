<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ProgramController extends Controller
{
    public function index(): View
    {
        $programs = [
            [
                'id' => 1,
                'title' => 'Beginner Football Training',
                'duration' => '3 Months',
                'price' => '$99',
                'description' => 'Fundamental training program for beginners to start their football career with a strong foundation.',
                'image' => 'https://images.unsplash.com/photo-1461896836934-ffe607ba8211?w=500&h=400&fit=crop',
                'features' => ['3x Per Week', 'Personal Coach', 'Video Tutorials', 'Progress Tracking'],
            ],
            [
                'id' => 2,
                'title' => 'Advanced Technique & Tactics',
                'duration' => '6 Months',
                'price' => '$199',
                'description' => 'Intensive program to master passing, dribbling, shooting, and advanced game strategy.',
                'image' => 'https://images.unsplash.com/photo-1434190402774-50d2c9fef25f?w=500&h=400&fit=crop',
                'features' => ['5x Per Week', 'Video Analysis', 'Tactics Training', 'Match Simulation'],
            ],
            [
                'id' => 3,
                'title' => 'Competition Preparation',
                'duration' => '4 Months',
                'price' => '$159',
                'description' => 'Specialized preparation for competitive matches focusing on mental preparation and team play.',
                'image' => 'https://images.unsplash.com/photo-1518611505867-d2fb8ff8e81f?w=500&h=400&fit=crop',
                'features' => ['4x Per Week', 'Mental Coaching', 'Tournament Practice', 'Team Formation'],
            ],
            [
                'id' => 4,
                'title' => 'Football Conditioning Program',
                'duration' => '3 Months',
                'price' => '$79',
                'description' => 'Focused training to improve stamina, speed, and strength specific to football players.',
                'image' => 'https://images.unsplash.com/photo-1552821206-3b0b3aa3a49f?w=500&h=400&fit=crop',
                'features' => ['3x Per Week', 'Conditioning', 'Speed Training', 'Injury Prevention'],
            ],
            [
                'id' => 5,
                'title' => 'Goalkeeper Specialist Program',
                'duration' => '3 Months',
                'price' => '$119',
                'description' => 'Specialized program for goalkeepers focusing on catching, kicking, and positioning techniques.',
                'image' => 'https://images.unsplash.com/photo-1576091160399-72ce8b36e3d7?w=500&h=400&fit=crop',
                'features' => ['3x Per Week', 'Specialized Training', 'Reflex Development', 'Communication Skills'],
            ],
            [
                'id' => 6,
                'title' => 'Elite Professional Program',
                'duration' => '12 Months',
                'price' => '$499',
                'description' => 'Professional level program with access to all classes, international coaches, and academy preparation.',
                'image' => 'https://images.unsplash.com/photo-1571902943202-507ec2618e8f?w=500&h=400&fit=crop',
                'features' => ['Unlimited Classes', 'Elite Coaching', 'Medical Support', 'Scholarship Opportunity'],
            ],
        ];

        return view('programs', compact('programs'));
    }
}
