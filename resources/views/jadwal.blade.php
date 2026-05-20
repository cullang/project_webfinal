<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Jadwal Kuliah</title>

  <link rel="stylesheet" href="{{ asset('css/jadwal.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

<div class="layout">

  <aside class="sidebar">
    <div>
      <div class="logo">
        <h2>UniPortal</h2>
        <p>Academic Management</p>
      </div>

      <nav class="menu">
        <a href="{{ route('dashboard') }}"><i class="fa-solid fa-border-all"></i> Dashboard</a>
        <a href="{{ route('jadwal') }}" class="active"><i class="fa-regular fa-rectangle-list"></i> Jadwal Kuliah</a>
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
      <div class="search-top">
        <i class="fa-solid fa-magnifying-glass"></i>
        <input type="text" placeholder="Cari mata kuliah...">
      </div>

      <div class="profile">
        <i class="fa-regular fa-bell"></i>
        <div>
          <h4>Budi Santoso</h4>
          <p>Informatika • Smt 5</p>
        </div>
        <img src="https://i.pravatar.cc/100?img=14" alt="user">
      </div>
    </header>

    <section class="content">

      <div class="title-row">
        <div>
          <h1>Jadwal Kuliah</h1>
          <p>Semester Ganjil 2023/2024</p>
        </div>

        <button class="export-btn">
          <i class="fa-solid fa-download"></i> Export PDF
        </button>
      </div>

      <div class="filter-row">
        <select>
          <option>Semua Hari</option>
          <option>Senin</option>
          <option>Selasa</option>
        </select>

        <select>
          <option>Semua Tipe</option>
          <option>Teori</option>
          <option>Praktikum</option>
        </select>

        <div class="search-filter">
          <i class="fa-solid fa-magnifying-glass"></i>
          <input type="text" placeholder="Cari Nama Mata Kuliah atau Dosen...">
        </div>
      </div>

      <div class="day-title">
        <span></span> SENIN
      </div>

      <div class="course-card blue">
        <div class="time">
          <h4>08:00 - 10:30</h4>
          <p>SKS: 3</p>
        </div>

        <div class="course-info">
          <span class="badge">TEORI</span>
          <h3>Sistem Operasi Lanjut</h3>
          <p>
            <i class="fa-regular fa-user"></i> Dr. Ir. Heru Santoso
            <i class="fa-solid fa-location-dot"></i> Ruang Kuliah 3.2
          </p>
        </div>

        <div class="course-action">
          <button>Lihat Detail</button>
          <button class="green-btn"><i class="fa-regular fa-file-lines"></i> Modul</button>
        </div>
      </div>

      <div class="course-card green">
        <div class="time">
          <h4>13:00 - 15:30</h4>
          <p>SKS: 2</p>
        </div>

        <div class="course-info">
          <span class="badge green-badge">PRAKTIKUM</span>
          <h3>Workshop Jaringan Komputer</h3>
          <p>
            <i class="fa-regular fa-user"></i> Andini Putri, M.Kom
            <i class="fa-solid fa-location-dot"></i> Lab Komputer 402
          </p>
        </div>

        <div class="course-action">
          <button>Lihat Detail</button>
          <button class="green-btn"><i class="fa-solid fa-download"></i> Panduan</button>
        </div>
      </div>

      <div class="day-title gray">
        <span></span> SELASA
      </div>

      <div class="course-card orange">
        <div class="time orange-time">
          <h4>09:00 - 11:30</h4>
          <p>SKS: 3</p>
        </div>

        <div class="course-info">
          <span class="badge orange-badge">TEORI</span>
          <h3>Kecerdasan Buatan</h3>
          <p>
            <i class="fa-regular fa-user"></i> Prof. Agus Wijaya
            <i class="fa-solid fa-location-dot"></i> Auditorium Utama
          </p>
        </div>

        <div class="course-action">
          <button>Lihat Detail</button>
          <button class="green-btn"><i class="fa-regular fa-file-lines"></i> Materi</button>
        </div>
      </div>

      <div class="bottom-cards">

        <div class="presence-card">
          <h2>Selesaikan Presensi Hari Ini!</h2>
          <p>
            Kamu memiliki 3 jadwal perkuliahan hari ini.
            Jangan lupa untuk melakukan presensi via QR-Code di setiap kelas.
          </p>
          <button>Buka Scanner Presensi</button>
        </div>

        <div class="tip-card">
          <i class="fa-regular fa-lightbulb"></i>
          <h3>Tip Akademik</h3>
          <p>
            Materi "Sistem Operasi Lanjut" hari ini sudah tersedia di portal modul.
            Silakan unduh untuk persiapan praktikum besok.
          </p>
          <a href="#">Unduh Modul →</a>
        </div>

      </div>

      <button class="float-btn">+</button>

    </section>

  </main>

</div>

</body>
</html>