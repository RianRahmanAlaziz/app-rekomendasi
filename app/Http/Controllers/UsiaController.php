<?php

namespace App\Http\Controllers;

use App\Models\Pupuk;
use App\Models\Usia;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class UsiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.usia.index', [
            'title' => 'Data Usia Tanam',
            'usia' => Usia::paginate(5),
            'pupuk' => Pupuk::all()
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
            'pupuk_id' => 'required',
            'deskripsi' => 'required',
        ]);

        Usia::create($validator);
        return redirect('/dashboard/data-usia')->with('success', 'Data Usia Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Usia $usia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usia $usia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $usia = Usia::findOrFail($id);
        $rules = [
            'nama' => 'required',
            'pupuk_id' => 'required',
            'deskripsi' => 'required',
        ];
        $validator = $request->validate($rules);

        Usia::where('id', $usia->id)->update($validator);

        return redirect('/dashboard/data-usia')->with('success', 'Data Usia Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $usia = Usia::findOrFail($id);

        Usia::destroy($usia->id);

        return redirect('/dashboard/data-usia')->with('success', 'Data Usia Berhasil di Hapus');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Usia::class, 'slug', $request->nama);

        return response()->json(['slug' => $slug]);
    }
}
