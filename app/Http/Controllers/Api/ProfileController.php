<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Update profile user (nama, email, nim, password, photo)
     */
    public function update(Request $request)
    {
        $user = $request->user();

        $data = $request->validate([
            'name'     => 'sometimes|string|max:255',
            'email'    => 'sometimes|email|unique:users,email,' . $user->id,
            'nim'      => 'sometimes|string|unique:users,nim,' . $user->id,
            'password' => 'sometimes|string|min:6|confirmed',
            'photo'    => 'sometimes|string',
        ]);

        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }

        $user->update($data);

        return response()->json($user);
    }

    /**
     * Ambil ringkasan statistik untuk dashboard
     */
    public function dashboard(Request $request)
    {
        $user = $request->user();

        $today = now()->locale('id')->dayName; // contoh: "Senin"

        $jadwalHariIni = $user->schedules()->where('day', $today)->count();
        $deadlineDekat = $user->tasks()
            ->where('status', '!=', 'Selesai')
            ->where('deadline_date', '<=', now()->addDays(3)->toDateString())
            ->count();
        $tugasSelesai  = $user->tasks()->where('status', 'Selesai')->count();
        $catatanTotal  = $user->notes()->count();

        $jadwalHariIniList = $user->schedules()
            ->where('day', $today)
            ->orderBy('start_time')
            ->take(2)
            ->get();

        $deadlineList = $user->tasks()
            ->where('status', '!=', 'Selesai')
            ->orderBy('deadline_date')
            ->take(2)
            ->get();

        $catatanPenting = $user->notes()
            ->orderByDesc('is_important')
            ->orderByDesc('created_at')
            ->take(2)
            ->get();

        $agendaTerdekat = $user->agendas()
            ->where('date', '>=', now()->toDateString())
            ->orderBy('date')
            ->take(2)
            ->get();

        return response()->json([
            'stats' => [
                'jadwal_hari_ini' => $jadwalHariIni,
                'deadline_dekat'  => $deadlineDekat,
                'tugas_selesai'   => $tugasSelesai,
                'catatan_total'   => $catatanTotal,
            ],
            'jadwal_hari_ini' => $jadwalHariIniList,
            'deadline_terdekat' => $deadlineList,
            'catatan_penting'   => $catatanPenting,
            'agenda_terdekat'   => $agendaTerdekat,
        ]);
    }
}
