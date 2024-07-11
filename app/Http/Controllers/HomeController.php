<?php

namespace App\Http\Controllers;

use App\Models\Pupuk;
use App\Models\Slider;
use App\Models\Tanaman;
use App\Models\Usia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index', [
            'title' => 'Situs Rekomendasi Pupuk',
            'pupuk' => Pupuk::all(),
            'tanaman' => Tanaman::all(),
            'sliders' => Slider::all()
        ]);
    }


    public function tanaman()
    {
        return view('home.tanaman.index', [
            'title' => 'Situs Rekomendasi Pupuk',
            'tanamans' => Tanaman::paginate(10)
        ]);
    }

    public function detailtanaman(Tanaman $tanaman)
    {
        return view('home.tanaman.detail', [
            'title' => 'Situs Rekomendasi Pupuk',
            'tanaman' => $tanaman,
            'usias' => Usia::all(),
        ]);
    }

    public function pupuk()
    {
        return view('home.pupuk.index', [
            'title' => 'Situs Rekomendasi Pupuk',
            'pupuks' => Pupuk::all(),
        ]);
    }

    public function detailpupuk(Pupuk $pupuk)
    {
        return view('home.pupuk.detail', [
            'title' => 'Situs Rekomendasi Pupuk',
            'pupuk' => $pupuk,
        ]);
    }

    public function rekomendasi(Usia $usia)
    {
        return view('home.rekomendasi.index', [
            'title' => 'Situs Rekomendasi Pupuk',
            'usia' => $usia,
        ]);
    }
}
