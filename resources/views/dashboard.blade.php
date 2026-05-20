<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard UniPortal</title>

  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

<div class="dashboard">

  <aside class="sidebar">
    <div>
      <div class="logo">
        <h2>UniPortal</h2>
        <p>ACADEMIC MANAGEMENT</p>
      </div>

      <nav class="menu">
        <a href="{{ route('dashboard') }}" class="active"><i class="fa-solid fa-border-all"></i> Dashboard</a>
        <a href="{{ route('jadwal') }}"><i class="fa-regular fa-rectangle-list"></i> Jadwal Kuliah</a>
        <a href="{{ route('deadline') }}"><i class="fa-regular fa-calendar-xmark"></i> Deadline Tugas</a>
        <a href="{{ route('kalender') }}"><i class="fa-regular fa-calendar-days"></i> Kalender Akademik</a>
        <a href="{{ route('informasi') }}"><i class="fa-solid fa-graduation-cap"></i> Informasi Kampus</a>
        <a href="{{ route('catatan') }}"><i class="fa-regular fa-file-lines"></i> Catatan Mahasiswa</a>
        <a href="{{ route('forum') }}"><i class="fa-regular fa-comments"></i> Forum Diskusi</a>
      </nav>
    </div>

    <div class="bottom-menu">
      <a href="{{ route('settings') }}"><i class="fa-solid fa-gear"></i> Settings</a>
      <a href="{{ route('login') }}"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
    </div>
  </aside>

  <main class="main">

    <header class="topbar">
      <div class="search">
        <i class="fa-solid fa-magnifying-glass"></i>
        <input type="text" placeholder="Cari materi, tugas, atau dosen...">
      </div>

      <div class="profile">
        <i class="fa-regular fa-bell"></i>
        <div class="user">
          <img src="https://i.pravatar.cc/100?img=12" alt="user">
          <div>
            <h4>Ahmad Fauzi</h4>
            <p>MAHASISWA</p>
          </div>
        </div>
      </div>
    </header>

    <section class="content">

      <h1>Selamat Datang Kembali, Ahmad! 👋</h1>
      <p class="subtitle">
        Semester 5 sedang berjalan lancar. Kamu memiliki
        <b>3 tugas</b> yang mendekati deadline minggu ini.
      </p>

      <div class="top-content">

        <div class="card schedule">
          <div class="card-title">
            <h3><i class="fa-regular fa-calendar"></i> Jadwal Kuliah Hari Ini</h3>
            <a href="{{ route('jadwal') }}">Lihat Semua</a>
          </div>

          <div class="class-item">
            <div class="time blue">
              <h4>08:00</h4>
              <small>SELESAI 09:40</small>
            </div>
            <div class="class-info">
              <h4>Interaksi Manusia & Komputer</h4>
              <p><i class="fa-solid fa-location-dot"></i> Ruang Lab-2 • Dr. Irfan Hakim</p>
            </div>
          </div>

          <div class="class-item">
            <div class="time green">
              <h4>10:00</h4>
              <small>SELESAI 12:30</small>
            </div>
            <div class="class-info">
              <h4>Algoritma & Struktur Data II</h4>
              <p><i class="fa-solid fa-location-dot"></i> Ruang A-301 • Prof. Siti Sarah</p>
            </div>
          </div>

          <div class="class-item">
            <div class="time yellow">
              <h4>13:30</h4>
              <small>SELESAI 15:10</small>
            </div>
            <div class="class-info">
              <h4>Basis Data Lanjut</h4>
              <p><i class="fa-solid fa-location-dot"></i> Ruang D-104 • Rahmat M.Kom</p>
            </div>
          </div>
        </div>

        <div class="card calendar-card">
          <h3><i class="fa-regular fa-calendar"></i> Kalender Akademik</h3>
          <p>
            Ujian Tengah Semester dimulai dalam <u>12 hari</u> lagi.
            Pastikan persiapanmu sudah matang!
          </p>

          <div class="event-box">
            <small>MENDATANG</small>
            <h4>Batas Akhir Input KRS</h4>
            <p>25 Oktober 2023</p>
          </div>

          <button onclick="window.location.href='{{ route('kalender') }}'">
              Buka Kalender Lengkap
          </button>
        </div>

      </div>

      <div class="card deadline">
        <div class="card-title">
          <h3><i class="fa-regular fa-clipboard"></i> Deadline Tugas Mendatang</h3>
          <button class="filter"><i class="fa-solid fa-filter"></i></button>
        </div>

        <table>
          <thead>
            <tr>
              <th>Mata Kuliah</th>
              <th>Nama Tugas</th>
              <th>Tenggat Waktu</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td><b>Interaksi Manusia & Komputer</b></td>
              <td>Laporan Analisis User Persona</td>
              <td class="red">Besok, 23:59</td>
              <td><span class="status red-bg">● Belum Selesai</span></td>
              <td><button class="action"><i class="fa-solid fa-upload"></i></button></td>
            </tr>

            <tr>
              <td><b>Basis Data Lanjut</b></td>
              <td>Normalisasi Tabel DB-Rental</td>
              <td>Jumat, 13 Okt</td>
              <td><span class="status green-bg">● Diserahkan</span></td>
              <td><button class="action"><i class="fa-regular fa-eye"></i></button></td>
            </tr>

            <tr>
              <td><b>Algoritma & Struktur Data II</b></td>
              <td>Implementasi Linked List C++</td>
              <td>Minggu, 15 Okt</td>
              <td><span class="status yellow-bg">● Menunggu Review</span></td>
              <td><button class="action"><i class="fa-solid fa-clock-rotate-left"></i></button></td>
            </tr>
          </tbody>
        </table>
      </div>

    </section>

  </main>

</div>

</body>
</html>