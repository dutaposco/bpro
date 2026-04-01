<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $programs = [
            [
                'id' => 1,
                'title' => 'Beginner Football Training',
                'duration' => '3 Months',
                'price' => 'Rp 999.000',
                'description' => 'Complete beginner program with professional coaching guidance.',
                'image' => 'https://images.unsplash.com/photo-1461896836934-ffe607ba8211?w=500&h=400&fit=crop',
            ],
            [
                'id' => 2,
                'title' => 'Advanced Technique & Tactics',
                'duration' => '6 Months',
                'price' => 'Rp 1.999.000',
                'description' => 'Intensive program to master advanced techniques and game strategy.',
                'image' => 'https://images.unsplash.com/photo-1434190402774-50d2c9fef25f?w=500&h=400&fit=crop',
            ],
            [
                'id' => 3,
                'title' => 'Competition Preparation',
                'duration' => '4 Months',
                'price' => 'Rp 1.599.000',
                'description' => 'Specialized program to prepare you for competitive matches.',
                'image' => 'https://images.unsplash.com/photo-1518611505867-d2fb8ff8e81f?w=500&h=400&fit=crop',
            ],
        ];

        $coaches = [
            [
                'id' => 1,
                'name' => 'James Wilson',
                'role' => 'Head Coach',
                'bio' => 'Former professional player with 15+ years experience, national champion.',
                'photo' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&h=300&fit=crop',
            ],
            [
                'id' => 2,
                'name' => 'Sarah Johnson',
                'role' => 'Technique Coach',
                'bio' => 'Specialist in fundamentals with modern methods, helped hundreds of players.',
                'photo' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=300&h=300&fit=crop',
            ],
            [
                'id' => 3,
                'name' => 'Henry Adams',
                'role' => 'Fitness Coach',
                'bio' => 'Physical conditioning expert with FIFA international certification.',
                'photo' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=300&h=300&fit=crop',
            ],
        ];

        $testimonials = [
            [
                'name' => 'Marcus Brown',
                'text' => 'I was unsure if I could play football. Now I\'m playing in the local league!',
                'image' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&h=100&fit=crop',
            ],
            [
                'name' => 'David Martinez',
                'text' => 'The coaches are professional and patient. My technique improved significantly in 3 months.',
                'image' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100&h=100&fit=crop',
            ],
        ];

        return view('home', compact('programs', 'coaches', 'testimonials'));
    }
}
