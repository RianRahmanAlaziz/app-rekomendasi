<?php

namespace App\Http\Controllers;

use App\Models\Pupuk;
use App\Models\Tanaman;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index', [
            'title' => 'Situs Belanja Online',
            'pupuk' => Pupuk::all(),
            'tanaman' => Tanaman::all()
        ]);
    }
}