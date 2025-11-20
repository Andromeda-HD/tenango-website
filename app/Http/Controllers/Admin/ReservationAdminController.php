<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationAdminController extends Controller
{
    public function index()
    {
        $data = Reservation::orderBy('date', 'asc')->get();
        return view('admin.reservasi.index', compact('data'));
    }

    public function edit($id)
    {
        $res = Reservation::findOrFail($id);
        return view('admin.reservasi.edit', compact('res'));
    }

    public function update(Request $request, $id)
    {
        $res = Reservation::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:100',
            'email' => 'nullable|email',
            'date' => 'required|date',
            'time' => 'required',
            'guests' => 'required|integer|min:1',
            'note' => 'nullable|string'
        ]);

        $res->update($validated);

        return redirect()->route('admin.reservasi.index');
    }

    public function destroy($id)
    {
        Reservation::findOrFail($id)->delete();
        return redirect()->route('admin.reservasi.index');
    }
}
