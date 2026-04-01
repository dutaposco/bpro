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
                'duration' => '3 Bulan',
                'price' => 'Rp 999.000',
                'description' => 'Program pelatihan dasar bersama Jack Brown untuk membangun fondasi teknis yang kuat di lapangan.',
                'image' => 'https://images.unsplash.com/photo-1579952363873-27f3bade9f55?w=800&auto=format&fit=crop',
            ],
            [
                'id' => 2,
                'title' => 'Teknik & Taktik Lanjutan',
                'duration' => '6 Bulan',
                'price' => 'Rp 1.999.000',
                'description' => 'Asah teknik dribbling dan visi bermain seperti George Brown di Persita Tangerang.',
                'image' => 'https://images.unsplash.com/photo-1517466787929-bc90951d0974?w=800&auto=format&fit=crop',
            ],
            [
                'id' => 3,
                'title' => 'Persiapan Kompetisi',
                'duration' => '4 Bulan',
                'price' => 'Rp 1.599.000',
                'description' => 'Program mental dan fisik ala Jack Brown untuk siap bertanding di level profesional.',
                'image' => 'https://images.unsplash.com/photo-1553778263-73a83bab9b0c?w=800&auto=format&fit=crop',
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
