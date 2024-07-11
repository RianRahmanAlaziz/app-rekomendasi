<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slider::updateOrCreate(
            [
                'nama_slider' => 'BU8',
                'deskripsi' => 'Tentukan Rekomendasi Pupuk Anda',
                'gambar' => '17197323444.jpeg'
            ],
            [
                'nama_slider' => 'BU8',
                'deskripsi' => 'Tentukan Rekomendasi Pupuk Anda',
                'gambar' => '17197323444.jpeg'
            ]
        );
    }
}
