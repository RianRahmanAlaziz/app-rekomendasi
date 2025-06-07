<?php

namespace App\Http\Controllers;

use App\Models\Pupuk;
use App\Models\Usia;
use Illuminate\Http\Request;

class PerhitunganController extends Controller
{
    public function index()
    {
        return view('dashboard.perhitungan.index', [
            'title' => 'Perhitungan',
            'usias' => Usia::all()
        ]);
    }

    public function perhitungan(Request $request)
    {
        // 1. Ambil usia target dari request
        $targetUsia = $request->input('usia_id', 1); // default 1 jika tidak dipilih

        // 2. Ambil semua data pupuk
        $pupuks = Pupuk::all();

        // 3. Buat matrix: ['Pupuk A' => [usia_id => rating]]
        $matrix = [];
        foreach ($pupuks as $pupuk) {
            $matrix[$pupuk->nama][$pupuk->usia_id] = $pupuk->rating;
        }

        // 4. Hitung similarity antar pupuk (opsional, jika ingin tampilkan pupuk mirip)
        $similarities = [];
        foreach ($matrix as $pupuk1 => $vec1) {
            foreach ($matrix as $pupuk2 => $vec2) {
                if ($pupuk1 !== $pupuk2) {
                    $similarities[$pupuk1][$pupuk2] = $this->cosineSimilarity($vec1, $vec2);
                }
            }
        }

        // 5. Ambil semua pupuk yang punya rating untuk usia_id target
        $rekomendasi = [];
        foreach ($pupuks as $pupuk) {
            if ($pupuk->usia_id == $targetUsia) {
                $rekomendasi[$pupuk->nama] = $pupuk->rating;
            }
        }

        // 6. Urutkan berdasarkan rating tertinggi
        arsort($rekomendasi);
        return view('dashboard.perhitungan.hasil', [
            'title' => 'Hasil',
            'rekomendasi' => $rekomendasi,
            'targetUsia' => $targetUsia,
        ]);
    }

    private function cosineSimilarity($vec1, $vec2)
    {
        $dotProduct = 0;
        $normA = 0;
        $normB = 0;

        foreach ($vec1 as $key => $val) {
            if (isset($vec2[$key])) {
                $dotProduct += $val * $vec2[$key];
                $normA += $val * $val;
                $normB += $vec2[$key] * $vec2[$key];
            }
        }

        if ($normA == 0 || $normB == 0) return 0;

        return $dotProduct / (sqrt($normA) * sqrt($normB));
    }
}
