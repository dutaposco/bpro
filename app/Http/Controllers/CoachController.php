<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CoachController extends Controller
{
    public function index(): View
    {
        $coaches = [
            [
                'id' => 1,
                'name' => 'Bambang Riyanto',
                'role' => 'Pelatih Kepala',
                'bio' => 'Mantan pemain profesional dengan pengalaman 15+ tahun. Pernah bermain di Liga Indonesia dan meraih juara nasional. Sekarang memimpin program latihan dengan metode modern.',
                'photo' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=400&fit=crop',
                'specialties' => ['Tactical Training', 'Team Building', 'Match Strategy'],
            ],
            [
                'id' => 2,
                'name' => 'Rina Kusuma',
                'role' => 'Pelatih Teknik',
                'bio' => 'Spesialis teknik dasar sepak bola dengan metode modern yang telah membantu ratusan pemain mencapai level yang lebih tinggi.',
                'photo' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400&h=400&fit=crop',
                'specialties' => ['Dribbling', 'Passing', 'Ball Control'],
            ],
            [
                'id' => 3,
                'name' => 'Hendra Susanto',
                'role' => 'Pelatih Fitness',
                'bio' => 'Ahli kondisi fisik dengan sertifikasi internasional dari FIFA. Fokus pada peningkatan stamina dan pencegahan cedera.',
                'photo' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400&h=400&fit=crop',
                'specialties' => ['Conditioning', 'Speed Training', 'Injury Prevention'],
            ],
            [
                'id' => 4,
                'name' => 'Siti Nurwahyuni',
                'role' => 'Pelatih Shooting & Set Piece',
                'bio' => 'Spesialis dalam teknik menembak dan tendangan set piece. Banyak muridnya yang mahir dalam situasi penalti dan free kick.',
                'photo' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=400&h=400&fit=crop',
                'specialties' => ['Shooting Technique', 'Set Pieces', 'Free Kicks'],
            ],
            [
                'id' => 5,
                'name' => 'Agus Wirawan',
                'role' => 'Pelatih Goalkeeper',
                'bio' => 'Mantan kiper profesional dengan pengalaman luas. Spesialis dalam training goalkeeper dan positioning defensif.',
                'photo' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=400&fit=crop',
                'specialties' => ['Goalkeeping', 'Distribution', 'Reaction Time'],
            ],
            [
                'id' => 6,
                'name' => 'Dewi Anggraeni',
                'role' => 'Pelatih Mental & Psikolog Olahraga',
                'bio' => 'Psikolog olahraga bersertifikat yang membantu pemain mengelola mental, confidence, dan pressure dalam pertandingan.',
                'photo' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=400&h=400&fit=crop',
                'specialties' => ['Mental Coaching', 'Confidence Building', 'Pressure Management'],
            ],
        ];

        return view('coaches', compact('coaches'));
    }
}
