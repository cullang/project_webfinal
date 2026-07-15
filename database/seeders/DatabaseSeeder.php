<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Schedule;
use App\Models\Task;
use App\Models\Agenda;
use App\Models\Note;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Create Default User (Ruslan)
        $user = User::create([
            'name' => 'Ruslan',
            'email' => 'ruslan@mahasiswa.ac.id',
            'nim' => '12345678',
            'password' => Hash::make('password'),
            'photo' => 'https://i.pravatar.cc/100?img=12'
        ]);

        // 2. Seed Schedules
        Schedule::create([
            'user_id' => $user->id,
            'name' => 'Pemrograman Web',
            'day' => 'Senin',
            'start_time' => '08:00',
            'end_time' => '10:30',
            'type' => 'TEORI',
            'room' => 'Lab Komputer 2',
            'lecturer' => 'Pak Rahmat, M.Kom',
            'notes' => 'Bawa laptop dan koneksi internet.'
        ]);

        Schedule::create([
            'user_id' => $user->id,
            'name' => 'Jaringan Komputer',
            'day' => 'Senin',
            'start_time' => '13:00',
            'end_time' => '15:30',
            'type' => 'PRAKTIKUM',
            'room' => 'Lab Jaringan',
            'lecturer' => 'Bu Andini',
            'notes' => 'Siapkan laporan praktikum minggu lalu.'
        ]);

        Schedule::create([
            'user_id' => $user->id,
            'name' => 'Basis Data Lanjut',
            'day' => 'Selasa',
            'start_time' => '09:00',
            'end_time' => '11:30',
            'type' => 'TEORI',
            'room' => 'Ruang A-301',
            'lecturer' => 'Pak Irfan',
            'notes' => 'Review materi normalisasi database.'
        ]);

        Schedule::create([
            'user_id' => $user->id,
            'name' => 'Interaksi Manusia dan Komputer',
            'day' => 'Rabu',
            'start_time' => '10:00',
            'end_time' => '12:00',
            'type' => 'TEORI',
            'room' => 'Ruang D-104',
            'lecturer' => 'Bu Siti',
            'notes' => 'Siapkan tugas analisis UI aplikasi.'
        ]);

        // 3. Seed Tasks
        Task::create([
            'user_id' => $user->id,
            'name' => 'Tugas Mandiri Basis Data',
            'subject' => 'Basis Data Lanjut',
            'deadline_date' => now()->addDays(3)->format('Y-m-d'),
            'status' => 'Proses'
        ]);

        Task::create([
            'user_id' => $user->id,
            'name' => 'Laporan Praktikum Jarkom',
            'subject' => 'Jaringan Komputer',
            'deadline_date' => now()->addDay()->format('Y-m-d'),
            'status' => 'Urgent'
        ]);

        Task::create([
            'user_id' => $user->id,
            'name' => 'Desain Wireframe IMK',
            'subject' => 'Interaksi Manusia dan Komputer',
            'deadline_date' => now()->addDays(5)->format('Y-m-d'),
            'status' => 'Selesai'
        ]);

        Task::create([
            'user_id' => $user->id,
            'name' => 'Tugas Besar Pemrograman Web',
            'subject' => 'Pemrograman Web',
            'deadline_date' => now()->addDays(10)->format('Y-m-d'),
            'status' => 'Proses'
        ]);

        // 4. Seed Agendas
        Agenda::create([
            'user_id' => $user->id,
            'title' => 'UTS Pemrograman Web',
            'date' => '2026-05-11',
            'category' => 'Ujian',
            'time' => '08:00',
            'description' => 'Materi dari minggu 1 s.d. 7, sifat ujian close book.'
        ]);

        Agenda::create([
            'user_id' => $user->id,
            'title' => 'Presentasi Kelompok IMK',
            'date' => '2026-05-14',
            'category' => 'Presentasi',
            'time' => '10:00',
            'description' => 'Presentasi prototype Figma dan analisis evaluasi heuristik.'
        ]);

        Agenda::create([
            'user_id' => $user->id,
            'title' => 'Kerja Kelompok Jarkom',
            'date' => '2026-05-08',
            'category' => 'Kerja Kelompok',
            'time' => '14:00',
            'description' => 'Membahas topologi jaringan dan pembagian IP subnetting.'
        ]);

        // 5. Seed Notes
        Note::create([
            'user_id' => $user->id,
            'title' => 'Materi Normalisasi Basis Data',
            'subject' => 'Basis Data Lanjut',
            'content' => 'Normalisasi 1NF, 2NF, 3NF adalah langkah penting untuk mendesain database relasional yang efisien dan menghindari redundansi.',
            'is_important' => true
        ]);

        Note::create([
            'user_id' => $user->id,
            'title' => 'Konfigurasi Cisco Packet Tracer',
            'subject' => 'Jaringan Komputer',
            'content' => 'Langkah routing statis: 1. Masuk CLI, 2. ip route <network> <mask> <gateway>, 3. save config.',
            'is_important' => false
        ]);

        Note::create([
            'user_id' => $user->id,
            'title' => 'Ide Project Akhir Web',
            'subject' => 'Pemrograman Web',
            'content' => 'Membuat aplikasi study planner pribadi dengan backend Laravel API dan frontend Next.js.',
            'is_important' => true
        ]);
    }
}
