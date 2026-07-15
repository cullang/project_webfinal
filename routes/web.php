<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
<<<<<<< HEAD
    return response()->json([
        'message' => 'Welcome to UniPortal API Server',
        'status' => 'running',
        'version' => '1.0.0'
    ]);
=======
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
    Route::get('/jadwal-kuliah', function () { return view('jadwal'); })->name('jadwal');
    Route::get('/deadline-tugas', function () { return view('deadline'); })->name('deadline');
    Route::get('/kalender-pribadi', function () { return view('kalender'); })->name('kalender');
    Route::get('/info-kuliah', function () { return view('informasi'); })->name('informasi');
    Route::get('/catatan-mahasiswa', function () { return view('catatan'); })->name('catatan');
    Route::get('/profil-mahasiswa', function () { return view('settings'); })->name('settings');
>>>>>>> 859ecd8ec40f3060048a67adcfc92292e548cfc2
});