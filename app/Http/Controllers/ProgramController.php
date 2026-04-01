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
                'description' => 'Bersama Jack dan George Brown, kuasai teknik operan dan penempatan posisi yang profesional.',
                'image' => 'https://img.okeinfo.net/content/2023/12/30/38/2947116/george-brown-jack-brown-bersinar-di-persita-tangerang-mampukah-keduanya-tembus-skuad-timnas-indonesia-asuhan-shin-tae-yong-7Nisv5i73e.jpg',
                'features' => ['3x Per Minggu', 'Jack Brown Mentorship', 'Video Tutorial', 'Progress Tracking'],
            ],
            [
                'id' => 2,
                'title' => 'Teknik & Taktik Lanjutan',
                'duration' => '6 Bulan',
                'price' => 'Rp 1.999.000',
                'description' => 'Latihan intensif dribbling dan visi bermain dari pengalaman George Brown di kompetisi liga.',
                'image' => 'https://media.suara.com/pictures/653x366/2023/11/24/60228-george-brown-dan-jack-brown-di-persita-tangerang.jpg',
                'features' => ['5x Per Minggu', 'Analisis George Brown', 'Pelatihan Taktik', 'Simulasi Pertandingan'],
            ],
            [
                'id' => 3,
                'title' => 'Persiapan Kompetisi',
                'duration' => '4 Bulan',
                'price' => 'Rp 1.599.000',
                'description' => 'Siapkan mental dan fisik juara untuk menembus skuad timnas atau klub papan atas.',
                'image' => 'https://static.republika.co.id/uploads/images/inpicture_slide/selebrasi-pemain-pusamania-borneo-fc-jack-brown-tengah-saat_220311094038-726.jpg',
                'features' => ['4x Per Minggu', 'Pelatihan Mental ELIT', 'Latihan Turnamen', 'Formasi Tim'],
            ],
            [
                'id' => 4,
                'title' => 'Program Kondisi Fisik',
                'duration' => '3 Bulan',
                'price' => 'Rp 799.000',
                'description' => 'Meningkatkan stamina atlet profesional dengan porsi latihan intensitas tinggi khas tim sepak bola luar.',
                'image' => 'https://images2.jawapos.com/jawapos/uploads/2023/09/20/george-brown-persebaya.jpg',
                'features' => ['3x Per Minggu', 'Fisik & Kondisi', 'Latihan Kecepatan', 'Pencegahan Cedera'],
            ],
            [
                'id' => 5,
                'title' => 'Program Spesialis Kiper',
                'duration' => '3 Bulan',
                'price' => 'Rp 1.199.000',
                'description' => 'Program pertahanan kuat yang sering dihadapi striker dalam kotak penalti.',
                'image' => 'https://www.bolasport.com/media/player/george-brown/655c650130f14.jpg',
                'features' => ['3x Per Minggu', 'Pelatihan Spesialis', 'Pengembangan Refleks', 'Komunikasi Tim'],
            ],
            [
                'id' => 6,
                'title' => 'Program Elite Profesional',
                'duration' => '12 Bulan',
                'price' => 'Rp 4.999.000',
                'description' => 'Jalur cepat karir profesional dengan kurikulum yang disusun bersama Jack dan George Brown.',
                'image' => 'https://akcdn.detik.net.id/visual/2017/04/18/69599525-412f-4886-af3b-9e4726bf690f_169.jpg?w=700&q=90',
                'features' => ['Kelas Tidak Terbatas', 'Pelatihan Elite', 'Dukungan Medis', 'Kesempatan Beasiswa'],
            ],
        ];

        return view('programs', compact('programs'));
    }
}
