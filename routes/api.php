<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ScheduleController;
use App\Http\Controllers\Api\TaskController;
use App\Http\Controllers\Api\AgendaController;
use App\Http\Controllers\Api\NoteController;
use App\Http\Controllers\Api\ProfileController;

// ── Public Routes ─────────────────────────────────────────────────────────────
Route::post('/login',    [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

// ── Protected Routes (memerlukan autentikasi Sanctum) ─────────────────────────
Route::middleware('auth:sanctum')->group(function () {

    // Auth
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me',      [AuthController::class, 'me']);

    // Dashboard (ringkasan statistik + data terdekat)
    Route::get('/dashboard', [ProfileController::class, 'dashboard']);

    // Profil
    Route::put('/profile', [ProfileController::class, 'update']);

    // Jadwal Kuliah
    Route::get('/schedules',       [ScheduleController::class, 'index']);
    Route::post('/schedules',      [ScheduleController::class, 'store']);
    Route::put('/schedules/{schedule}',    [ScheduleController::class, 'update']);
    Route::delete('/schedules/{schedule}', [ScheduleController::class, 'destroy']);

    // Tugas / Deadline
    Route::get('/tasks',         [TaskController::class, 'index']);
    Route::post('/tasks',        [TaskController::class, 'store']);
    Route::put('/tasks/{task}',    [TaskController::class, 'update']);
    Route::delete('/tasks/{task}', [TaskController::class, 'destroy']);

    // Agenda / Kalender
    Route::get('/agendas',            [AgendaController::class, 'index']);
    Route::post('/agendas',           [AgendaController::class, 'store']);
    Route::put('/agendas/{agenda}',    [AgendaController::class, 'update']);
    Route::delete('/agendas/{agenda}', [AgendaController::class, 'destroy']);

    // Catatan Mahasiswa
    Route::get('/notes',          [NoteController::class, 'index']);
    Route::post('/notes',         [NoteController::class, 'store']);
    Route::put('/notes/{note}',    [NoteController::class, 'update']);
    Route::delete('/notes/{note}', [NoteController::class, 'destroy']);
});
