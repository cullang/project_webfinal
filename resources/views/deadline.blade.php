<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Deadline Tugas</title>

  <link rel="stylesheet" href="{{ asset('css/deadline.css') }}">
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
        <a href="{{ route('jadwal') }}"><i class="fa-regular fa-rectangle-list"></i> Jadwal Kuliah</a>
        <a href="{{ route('deadline') }}" class="active"><i class="fa-regular fa-calendar-xmark"></i> Deadline Tugas</a>
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
        <input type="text" placeholder="Cari tugas...">
      </div>

      <div class="profile">
        <i class="fa-regular fa-bell"></i>
        <div>
          <h4>Budi Santoso</h4>
          <p>S1 Teknik Informatika</p>
        </div>
        <img src="https://i.pravatar.cc/100?img=14" alt="user">
      </div>
    </header>

    <section class="content">

      <div class="main-grid">

        <div class="left-content">

          <div class="summary-card">
            <div>
              <h2>Ringkasan Tugas</h2>
              <p>Kamu memiliki 4 tugas yang mendekati deadline minggu ini. Tetap semangat!</p>

              <div class="summary-stats">
                <div>
                  <i class="fa-regular fa-clipboard"></i>
                  <span>Pending</span>
                  <h3>12</h3>
                </div>

                <div>
                  <i class="fa-regular fa-circle-check"></i>
                  <span>Selesai</span>
                  <h3>48</h3>
                </div>
              </div>
            </div>

            <i class="fa-solid fa-book-open big-icon"></i>
          </div>

          <div class="filter-row">
            <button class="active">Semua Tugas</button>
            <button>Menunggu</button>
            <button>Selesai</button>
            <button>Terlambat</button>
          </div>

          <div class="task-card green-line">
            <div>
              <span class="tag green">PEMROGRAMAN WEB</span>
              <small>Tugas Praktikum 4</small>
              <h3>Implementasi REST API <br> dengan Node.js</h3>

              <p>
                <i class="fa-regular fa-calendar"></i> 24 Okt 2023, 23:59
                <i class="fa-regular fa-clock"></i> 2 Hari Lagi
              </p>
            </div>

            <div class="task-action">
              <i class="fa-regular fa-bell"></i>
              <button><i class="fa-regular fa-circle-check"></i> Tandai Selesai</button>
            </div>
          </div>

          <div class="task-card blue-line">
            <div>
              <span class="tag blue">BASIS DATA</span>
              <small>Proyek Akhir Semester</small>
              <h3>Desain Database E-Commerce <br> Kompleks</h3>

              <p>
                <i class="fa-regular fa-calendar"></i> 28 Okt 2023, 23:59
                <i class="fa-regular fa-clock"></i> 6 Hari Lagi
              </p>
            </div>

            <div class="task-action">
              <i class="fa-regular fa-bell"></i>
              <button><i class="fa-regular fa-circle-check"></i> Tandai Selesai</button>
            </div>
          </div>

          <div class="task-card done gray-line">
            <div>
              <span class="tag gray">KECERDASAN BUATAN</span>
              <small>Latihan 2</small>
              <h3>Implementasi Algoritma A* Search</h3>
              <p><i class="fa-regular fa-circle-check"></i> Sudah Dikumpulkan</p>
            </div>

            <p class="done-text">Selesai</p>
          </div>

          <button class="more-btn">Lihat 15 Tugas Lainnya</button>

        </div>

        <div class="right-content">

          <div class="reminder-card">
            <i class="fa-regular fa-circle-check"></i>
            <h2>Reminder Aktif</h2>
            <p>Pengingat otomatis disetel 24 jam sebelum deadline berakhir</p>
            <button>Kelola Pengingat</button>
          </div>

          <div class="sort-row">
            <span>Urutkan:</span>
            <select>
              <option>Deadline Terdekat</option>
              <option>Deadline Terlama</option>
            </select>
          </div>

          <div class="nearest-card">
            <h3>Deadline Terdekat</h3>

            <div class="nearest green-border">
              <h4>Implementasi REST API</h4>
              <p>Besok, 23:59</p>
            </div>

            <div class="nearest green-border">
              <h4>Analisa Sistem Informasi</h4>
              <p>Kamis, 12:00</p>
            </div>

            <div class="nearest blue-border">
              <h4>Desain Database E-Commerce</h4>
              <p>Sabtu, 23:59</p>
            </div>
          </div>

          <div class="tip-card">
            <h4>Tip Produktivitas</h4>
            <h2>Gunakan Teknik Pomodoro</h2>
            <p>
              Selesaikan tugas besar dengan membaginya menjadi interval 25 menit
              untuk hasil maksimal.
            </p>
            <a href="#">Baca Selengkapnya</a>
          </div>

        </div>

      </div>

      <button class="float-btn">+</button>

    </section>

  </main>

</div>

</body>
</html>