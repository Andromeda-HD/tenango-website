<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Carbon\Carbon;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $today = Carbon::today();

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email',
            'date' => 'required|date|after_or_equal:' . $today->addDay()->toDateString(),
            'time' => 'required',
            'guests' => 'required|integer|min:1|max:30',
            'note' => 'nullable|string|max:500'
        ], [
            'date.after_or_equal' => 'Tanggal reservasi harus minimal 1 hari dari sekarang.'
        ]);

        Reservation::create($validated);

        return back()->with('success', 'Reservasi berhasil dikirim!');
    }
}
