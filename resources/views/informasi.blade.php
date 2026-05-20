<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Informasi Kampus</title>

  <link rel="stylesheet" href="{{ asset('css/informasi.css') }}">
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
        <a href="{{ route('deadline') }}"><i class="fa-regular fa-calendar-xmark"></i> Deadline Tugas</a>
        <a href="{{ route('kalender') }}"><i class="fa-regular fa-calendar-days"></i> Kalender Akademik</a>
        <a href="{{ route('informasi') }}" class="active"><i class="fa-solid fa-graduation-cap"></i> Informasi Kampus</a>
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
        <input type="text" placeholder="Cari informasi, berita, kegiatan...">
      </div>

      <div class="profile">
        <i class="fa-regular fa-bell"></i>
        <img src="https://i.pravatar.cc/100?img=14" alt="user">
      </div>
    </header>

    <section class="content">

      <div class="main-grid">

        <div class="left">

          <div class="hero-card">
            <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?q=80&w=1200&auto=format&fit=crop" alt="kampus">
            <div class="hero-text">
              <span>PENGUMUMAN</span>
              <h1>Pembangunan Research Hub Internasional Tahap Akhir</h1>
              <p>Fasilitas riset teknologi di Asia Tenggara akan segera dibuka bulan depan untuk mendukung inovasi mahasiswa dan dosen.</p>
            </div>
          </div>

          <div class="section-title">
            <div>
              <h3>Warta Kampus</h3>
              <p>Update terbaru seputar berita akademik dan kemahasiswaan</p>
            </div>
            <a href="#">Lihat Semua</a>
          </div>

          <div class="news-card">
            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=500&auto=format&fit=crop" alt="berita">
            <div>
              <small>BERITA • 2 Jam yang lalu</small>
              <h3>Tim Robotika Universitas Meraih Medali Emas di Kejuaraan Asia</h3>
              <p>Prestasi gemilang kembali diraih mahasiswa melalui kompetisi robotik tingkat internasional.</p>
            </div>
          </div>

          <div class="news-card">
            <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?q=80&w=500&auto=format&fit=crop" alt="berita">
            <div>
              <small>AKADEMIK • Kemarin</small>
              <h3>Kuliah Umum: Masa Depan Ekonomi Digital di Era AI</h3>
              <p>Menghadirkan pakar teknologi finansial dan ekonomi digital nasional.</p>
            </div>
          </div>

          <div class="facility-section">
            <h3>Direktori Fasilitas</h3>
            <p>Lokasi dan layanan penting di area kampus</p>

            <div class="facility-grid">
              <div class="facility"><i class="fa-solid fa-book"></i><span>Perpustakaan</span></div>
              <div class="facility"><i class="fa-solid fa-flask"></i><span>Laboratorium</span></div>
              <div class="facility"><i class="fa-solid fa-utensils"></i><span>Gedung Olahraga</span></div>
              <div class="facility"><i class="fa-solid fa-bus"></i><span>Poliklinik</span></div>
              <div class="facility"><i class="fa-solid fa-mug-hot"></i><span>Kantin Pusat</span></div>
              <div class="facility"><i class="fa-solid fa-building"></i><span>Aula</span></div>
            </div>
          </div>

        </div>

        <div class="right">

          <div class="announcement-card">
            <div class="badge">INFO</div>
            <h3>Pengumuman UKT Semester Ganjil</h3>
            <p>Batas pembayaran UKT semester ganjil diperpanjang sampai akhir bulan ini.</p>
            <a href="#">Lihat Detail →</a>
          </div>

          <div class="status-card">
            <h4>STATUS KAMPUS</h4>
            <div class="status">
              <div>
                <h3>Normal</h3>
                <p>Kegiatan belajar mengajar aktif</p>
              </div>
              <span></span>
            </div>
          </div>

          <div class="agenda-card">
            <h3>Agenda Terdekat</h3>

            <div class="agenda">
              <div class="date">
                <b>NOV</b>
                <span>24</span>
              </div>
              <div>
                <h4>Workshop UI/UX Design</h4>
                <p>08.00 - Aula Utama</p>
              </div>
            </div>

            <div class="agenda">
              <div class="date">
                <b>NOV</b>
                <span>26</span>
              </div>
              <div>
                <h4>Career Fair 2024</h4>
                <p>09.00 - Hall Rektorat</p>
              </div>
            </div>
          </div>

          <div class="help-card">
            <h4>PUSAT BANTUAN</h4>
            <h3>Layanan Pengaduan dan Informasi 24 Jam</h3>
            <p>Hubungi bagian administrasi akademik untuk bantuan layanan mahasiswa.</p>
            <button>Lihat Semua Bantuan</button>
          </div>

        </div>

      </div>

    </section>

  </main>

</div>

</body>
</html>