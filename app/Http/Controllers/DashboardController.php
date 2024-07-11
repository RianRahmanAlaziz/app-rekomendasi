<?php

namespace App\Http\Controllers;

use App\Models\Pupuk;
use App\Models\Tanaman;
use App\Models\User;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'title' => 'Dashboard Admin',
            'tanaman' => Tanaman::count(),
            'pupuk' => Pupuk::count(),
            'user' => User::count(),
        ]);
    }
}
