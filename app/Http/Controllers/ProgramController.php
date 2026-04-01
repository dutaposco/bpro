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
                'description' => 'Bersama Jack Brown, kuasai teknik operan dan penempatan posisi yang profesional untuk pemula.',
                'image' => 'https://images.unsplash.com/photo-1579952363873-27f3bade9f55?w=800&auto=format&fit=crop',
                'features' => ['3x Per Minggu', 'Jack Brown Mentorship', 'Video Tutorial', 'Progress Tracking'],
            ],
            [
                'id' => 2,
                'title' => 'Teknik & Taktik Lanjutan',
                'duration' => '6 Bulan',
                'price' => 'Rp 1.999.000',
                'description' => 'Latihan intensif dribbling dan visi bermain dari pengalaman George Brown di kompetisi liga profesional.',
                'image' => 'https://images.unsplash.com/photo-1517466787929-bc90951d0974?w=800&auto=format&fit=crop',
                'features' => ['5x Per Minggu', 'Analisis George Brown', 'Pelatihan Taktik', 'Simulasi Pertandingan'],
            ],
            [
                'id' => 3,
                'title' => 'Persiapan Kompetisi',
                'duration' => '4 Bulan',
                'price' => 'Rp 1.599.000',
                'description' => 'Siapkan mental dan fisik juara ala Jack Brown untuk menembus skuad klub papan atas.',
                'image' => 'https://images.unsplash.com/photo-1553778263-73a83bab9b0c?w=800&auto=format&fit=crop',
                'features' => ['4x Per Minggu', 'Pelatihan Mental ELIT', 'Latihan Turnamen', 'Formasi Tim'],
            ],
            [
                'id' => 4,
                'title' => 'Program Kondisi Fisik',
                'duration' => '3 Bulan',
                'price' => 'Rp 799.000',
                'description' => 'Meningkatkan stamina atlet dengan porsi latihan intensitas tinggi khas pemain profesional.',
                'image' => 'https://images.unsplash.com/photo-1579952363873-27f3bade9f55?w=800&auto=format&fit=crop',
                'features' => ['3x Per Minggu', 'Fisik & Kondisi', 'Latihan Kecepatan', 'Pencegahan Cedera'],
            ],
            [
                'id' => 5,
                'title' => 'Program Spesialis Kiper',
                'duration' => '3 Bulan',
                'price' => 'Rp 1.199.000',
                'description' => 'Program khusus untuk mengasah refleks dan antisipasi kiper di level kompetisi tertinggi.',
                'image' => 'https://images.unsplash.com/photo-1510566337590-2fc1f21d0faa?w=800&auto=format&fit=crop',
                'features' => ['3x Per Minggu', 'Pelatihan Spesialis', 'Pengembangan Refleks', 'Komunikasi Tim'],
            ],
            [
                'id' => 6,
                'title' => 'Program Elite Profesional',
                'duration' => '12 Bulan',
                'price' => 'Rp 4.999.000',
                'description' => 'Jalur cepat karir profesional dengan kurikulum yang disusun bersama duo Jack & George Brown.',
                'image' => 'https://images.unsplash.com/photo-1574629810360-7efbbe195018?w=800&auto=format&fit=crop',
                'features' => ['Kelas Tidak Terbatas', 'Pelatihan Elite', 'Dukungan Medis', 'Kesempatan Beasiswa'],
            ],
        ];

        return view('programs', compact('programs'));
    }
}
