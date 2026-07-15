<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Register akun baru
     */
    public function register(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'nim'      => 'required|string|max:50|unique:users,nim',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ], [
            'name.required'      => 'Nama lengkap wajib diisi.',
            'nim.required'       => 'NIM wajib diisi.',
            'nim.unique'         => 'NIM ini sudah terdaftar.',
            'email.required'     => 'Email wajib diisi.',
            'email.unique'       => 'Email ini sudah terdaftar.',
            'password.required'  => 'Password wajib diisi.',
            'password.min'       => 'Password minimal 6 karakter.',
            'password.confirmed' => 'Konfirmasi password tidak cocok.',
        ]);

        $user = User::create([
            'name'     => $request->name,
            'nim'      => $request->nim,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $token = $user->createToken('uniportal-token')->plainTextToken;

        return response()->json([
            'token' => $token,
            'user'  => $user,
        ], 201);
    }

    /**
     * Login dan dapatkan token Sanctum
     */
    public function login(Request $request)
    {
        $request->validate([
            'identifier' => 'required|string',
            'password'   => 'required|string',
        ]);

        // Cari user berdasarkan email atau NIM
        $user = User::where('email', $request->identifier)
            ->orWhere('nim', $request->identifier)
            ->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'identifier' => ['NIM/Email atau password salah.'],
            ]);
        }

        $token = $user->createToken('uniportal-token')->plainTextToken;

        return response()->json([
            'token' => $token,
            'user'  => $user,
        ]);
    }

    /**
     * Logout (cabut token saat ini)
     */
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' => 'Berhasil logout.']);
    }

    /**
     * Ambil data user yang sedang login
     */
    public function me(Request $request)
    {
        return response()->json($request->user());
    }
}
