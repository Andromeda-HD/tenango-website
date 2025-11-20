<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SpotFoto;
use Illuminate\Http\Request;

class SpotFotoController extends Controller
{
    public function index()
    {
        $spot = SpotFoto::all();
        return view('admin.spot.index', compact('spot'));
    }

    public function create()
    {
        return view('admin.spot.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('images/uploads'), $filename);

            $data['gambar'] = 'images/uploads/'.$filename;
        }

        SpotFoto::create($data);

        return redirect()->route('admin.spot.index');
    }

    public function edit($id)
    {
        $spot = SpotFoto::findOrFail($id);
        return view('admin.spot.edit', compact('spot'));
    }

    public function update(Request $request, $id)
    {
        $spot = SpotFoto::findOrFail($id);

        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('images/uploads'), $filename);

            $data['gambar'] = 'images/uploads/'.$filename;
        }

        $spot->update($data);

        return redirect()->route('admin.spot.index');
    }

    public function destroy($id)
    {
        $spot = SpotFoto::findOrFail($id);
        $spot->delete();

        return redirect()->route('admin.spot.index');
    }
}
