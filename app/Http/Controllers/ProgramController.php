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
                'duration' => '3 Bulan',
                'price' => 'Rp 999.000',
                'description' => 'Program fundamental untuk pemula memulai karir sepak bola dengan fondasi yang kuat.',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/92/Youth-soccer-indiana.jpg/800px-Youth-soccer-indiana.jpg',
                'features' => ['3x Per Minggu', 'Personal Coach', 'Video Tutorial', 'Progress Tracking'],
            ],
            [
                'id' => 2,
                'title' => 'Teknik & Taktik Lanjutan',
                'duration' => '6 Bulan',
                'price' => 'Rp 1.999.000',
                'description' => 'Program intensif untuk menguasai passing, dribbling, shooting, dan strategi permainan lanjutan.',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/18/Football_pitch.jpg/800px-Football_pitch.jpg',
                'features' => ['5x Per Minggu', 'Analisis Video', 'Pelatihan Taktik', 'Simulasi Pertandingan'],
            ],
            [
                'id' => 3,
                'title' => 'Persiapan Kompetisi',
                'duration' => '4 Bulan',
                'price' => 'Rp 1.599.000',
                'description' => 'Persiapan khusus untuk pertandingan kompetitif dengan fokus pada mental dan permainan tim.',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/USA_Soccer_Women%27s_National_Team_warm-up.jpg/800px-USA_Soccer_Women%27s_National_Team_warm-up.jpg',
                'features' => ['4x Per Minggu', 'Pelatihan Mental', 'Latihan Turnamen', 'Formasi Tim'],
            ],
            [
                'id' => 4,
                'title' => 'Program Kondisi Fisik',
                'duration' => '3 Bulan',
                'price' => 'Rp 799.000',
                'description' => 'Latihan terfokus untuk meningkatkan stamina, kecepatan, dan kekuatan khusus pemain sepak bola.',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/FC_Barcelona_training_session_%281%29.jpg/800px-FC_Barcelona_training_session_%281%29.jpg',
                'features' => ['3x Per Minggu', 'Fisik & Kondisi', 'Latihan Kecepatan', 'Pencegahan Cedera'],
            ],
            [
                'id' => 5,
                'title' => 'Program Spesialis Kiper',
                'duration' => '3 Bulan',
                'price' => 'Rp 1.199.000',
                'description' => 'Program khusus kiper yang fokus pada teknik tangkapan, tendangan, dan penempatan posisi.',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8e/Goalkeeper_in_training.jpg/800px-Goalkeeper_in_training.jpg',
                'features' => ['3x Per Minggu', 'Pelatihan Spesialis', 'Pengembangan Refleks', 'Komunikasi Tim'],
            ],
            [
                'id' => 6,
                'title' => 'Program Elite Profesional',
                'duration' => '12 Bulan',
                'price' => 'Rp 4.999.000',
                'description' => 'Program level profesional dengan akses semua kelas, pelatih internasional, dan persiapan akademi.',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b9/Above_Gotham.jpg/800px-Above_Gotham.jpg',
                'features' => ['Kelas Tidak Terbatas', 'Pelatihan Elite', 'Dukungan Medis', 'Kesempatan Beasiswa'],
            ],
        ];

        return view('programs', compact('programs'));
    }
}
