<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuAdminController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('admin.menu.index', compact('menus'));
    }

    public function create()
    {
        return view('admin.menu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
            'gambar' => 'required|image|max:2048'
        ]);

        $file = $request->file('gambar');
        $namaFile = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('images/uploads'), $namaFile);

        Menu::create([
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'gambar' => $namaFile
        ]);

        return redirect()->route('admin.menu.index');
    }

    public function edit(Menu $menu)
    {
        return view('admin.menu.edit', compact('menu'));
    }

    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
            'gambar' => 'image|max:2048'
        ]);

        $data = $request->only(['nama','kategori','harga','deskripsi']);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaFile = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images/uploads'), $namaFile);
            $data['gambar'] = $namaFile;
        }

        $menu->update($data);

        return redirect()->route('admin.menu.index');
    }

    public function destroy(Menu $menu)
    {
        if ($menu->gambar && file_exists(public_path('images/uploads/'.$menu->gambar))) {
            unlink(public_path('images/uploads/'.$menu->gambar));
        }

        $menu->delete();
        return redirect()->route('admin.menu.index');
    }
}
