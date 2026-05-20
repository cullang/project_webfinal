<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <p>ACADEMIC MANAGEMENT</p>
      </div>

      <nav class="menu">
        <a href="{{ route('dashboard') }}"><i class="fa-solid fa-border-all"></i> Dashboard</a>
        <a href="{{ route('jadwal') }}" class="active"><i class="fa-regular fa-rectangle-list"></i> Jadwal Kuliah</a>
        <a href="#"><i class="fa-regular fa-calendar-xmark"></i> Deadline Tugas</a>
        <a href="#"><i class="fa-regular fa-calendar-days"></i> Kalender Akademik</a>
        <a href="#"><i class="fa-solid fa-graduation-cap"></i> Informasi Kampus</a>
        <a href="#"><i class="fa-regular fa-file-lines"></i> Catatan Mahasiswa</a>
        <a href="#"><i class="fa-regular fa-comments"></i> Forum Diskusi</a>
      </nav>
    </div>

    <div class="bottom-menu">
      <a href="#"><i class="fa-solid fa-gear"></i> Settings</a>
      <a href="{{ route('login') }}"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
    </div>

  </aside>

  <main class="main">

    <header class="topbar">
      <div class="search">
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

        <div class="view-btn">
          <button class="active">Weekly View</button>
          <button>List View</button>
        </div>
      </div>

      <div class="schedule-layout">

        <div class="days">
          <div class="day active">
            <small>SENIN</small>
            <h3>18 Sep</h3>
          </div>

          <div class="day">
            <small>SELASA</small>
            <h3>19 Sep</h3>
          </div>

          <div class="day">
            <small>RABU</small>
            <h3>20 Sep</h3>
          </div>

          <div class="day">
            <small>KAMIS</small>
            <h3>21 Sep</h3>
          </div>

          <div class="day">
            <small>JUMAT</small>
            <h3>22 Sep</h3>
          </div>
        </div>

        <div class="classes">

          <div class="class-card active-card">
            <div class="time">
              <h2>08:00</h2>
              <p>s.d 10:30</p>
            </div>

            <div class="class-info">
              <span>TEORI</span>
              <small>Mata Kuliah Wajib</small>
              <h3>Sistem Operasi Lanjut</h3>

              <div class="meta">
                <p><i class="fa-regular fa-building"></i> Lab Komputer 402</p>
                <p><i class="fa-regular fa-user"></i> Dr. Irwan Saputra</p>
              </div>
            </div>

            <div class="actions">
              <label>SEDANG BERLANGSUNG</label>
              <button><i class="fa-regular fa-eye"></i> Lihat Detail</button>
              <button class="outline"><i class="fa-regular fa-calendar"></i> Kalender</button>
            </div>
          </div>

          <div class="class-card">
            <div class="time">
              <h2>11:00</h2>
              <p>s.d 13:30</p>
            </div>

            <div class="class-info">
              <span class="gray">PRAKTIKUM</span>
              <small>Mata Kuliah Pilihan</small>
              <h3>Pengembangan Aplikasi Mobile</h3>

              <div class="meta">
                <p><i class="fa-regular fa-building"></i> Gedung B - R.301</p>
                <p><i class="fa-regular fa-user"></i> Siti Rahayu, M.T</p>
              </div>
            </div>

            <div class="actions">
              <button class="soft">Lihat Detail</button>
              <button class="icon"><i class="fa-regular fa-calendar"></i></button>
            </div>
          </div>

          <div class="class-card">
            <div class="time">
              <h2>14:00</h2>
              <p>s.d 15:40</p>
            </div>

            <div class="class-info">
              <span class="gray">TEORI</span>
              <small>Mata Kuliah Umum</small>
              <h3>Etika Profesi & Hukum IT</h3>

              <div class="meta">
                <p><i class="fa-regular fa-building"></i> Gedung A - Aula Utama</p>
                <p><i class="fa-regular fa-user"></i> Bambang Heru, S.H.</p>
              </div>
            </div>

            <div class="actions">
              <button class="soft">Lihat Detail</button>
              <button class="icon"><i class="fa-regular fa-calendar"></i></button>
            </div>
          </div>

        </div>

      </div>

      <div class="bottom-cards">

        <div class="presence">
          <h2>Selesaikan Presensi Hari Ini!</h2>
          <p>
            Kamu memiliki 3 jadwal perkuliahan hari ini.
            Jangan lupa untuk melakukan presensi via QR-Code di setiap kelas.
          </p>
          <button>Buka Scanner Presensi</button>
        </div>

        <div class="tips">
          <i class="fa-regular fa-lightbulb"></i>
          <h3>Tip Akademik</h3>
          <p>
            Materi "Sistem Operasi Lanjut" hari ini sudah tersedia di portal modul.
            Silakan unduh untuk persiapan praktikum besok.
          </p>
          <a href="#">Unduh Modul <i class="fa-solid fa-arrow-right"></i></a>
        </div>

      </div>

      <button class="float-btn">+</button>

    </section>

  </main>

</div>

</body>
</html>