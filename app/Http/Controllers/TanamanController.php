<?php

namespace App\Http\Controllers;

use App\Models\Tanaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class TanamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.tanaman.index', [
            'title' => 'Data Tanaman',
            'tanamans' => Tanaman::paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'nama' => 'required',
            'slug' => 'required|unique:tanamans',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpg,png,jpeg,webp',
        ]);

        if ($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move('assets/img/tanaman', $nama_gambar);
            $validator['gambar'] = $nama_gambar;
        }

        Tanaman::create($validator);

        return redirect('/dashboard/data-tanaman')->with('success', 'Data Tanaman Baru Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tanaman $tanaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tanaman $tanaman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $tanaman = Tanaman::findOrFail($id);
        $rules = [
            'nama' => 'required',
            'deskripsi' => 'required',
        ];

        if ($request->slug != $tanaman->slug) {
            $rules['slug'] = 'required|unique:tanamans';
        }

        $validator = $request->validate($rules);

        if ($request->has('gambar')) {
            File::delete('assets/img/tanaman/' . $tanaman->gambar);

            $gambar = $request->file('gambar');
            $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move('assets/img/tanaman', $nama_gambar);
            $validator['gambar'] = $nama_gambar;
        } else {
            unset($validator['gambar']);
        }

        Tanaman::where('id', $tanaman->id)->update($validator);

        return redirect('/dashboard/data-tanaman')->with('success', 'Data Tanaman Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tanaman = Tanaman::findOrFail($id);
        File::delete('assets/img/tanaman/' . $tanaman->gambar);
        Tanaman::destroy($tanaman->id);

        return redirect('/dashboard/data-tanaman')->with('success', 'Data Tanaman Berhasil di Hapus');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Tanaman::class, 'slug', $request->nama);

        return response()->json(['slug' => $slug]);
    }
}
