<?php

namespace App\Http\Controllers;

use App\Models\Pupuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class PupukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.pupuk.index', [
            'title' => 'Data Pupuk',
            'pupuks' => Pupuk::paginate(5)
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
            'slug' => 'required|unique:pupuks',
            'harga' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpg,png,jpeg,webp',
        ]);

        if ($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move('assets/img/pupuk', $nama_gambar);
            $validator['gambar'] = $nama_gambar;
        }
        Pupuk::create($validator);

        return redirect('/dashboard/data-pupuk')->with('success', 'Data Pupuk Baru Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pupuk $pupuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pupuk $pupuk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $pupuk = Pupuk::findOrFail($id);
        $rules = [
            'nama' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
        ];

        if ($request->slug != $pupuk->slug) {
            $rules['slug'] = 'required|unique:tanamans';
        }
        $validator = $request->validate($rules);

        if ($request->has('gambar')) {
            File::delete('assets/img/pupuk/' . $pupuk->gambar);

            $gambar = $request->file('gambar');
            $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move('assets/img/pupuk', $nama_gambar);
            $validator['gambar'] = $nama_gambar;
        } else {
            unset($validator['gambar']);
        }

        Pupuk::where('id', $pupuk->id)->update($validator);

        return redirect('/dashboard/data-pupuk')->with('success', 'Data Pupuk Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pupuk = Pupuk::findOrFail($id);
        File::delete('assets/img/pupuk/' . $pupuk->gambar);
        Pupuk::destroy($pupuk->id);

        return redirect('/dashboard/data-pupuk')->with('success', 'Data Pupuk Berhasil di Hapus');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Pupuk::class, 'slug', $request->nama);

        return response()->json(['slug' => $slug]);
    }
}
