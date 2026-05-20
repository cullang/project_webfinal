<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kalender Akademik</title>

  <link rel="stylesheet" href="{{ asset('css/kalender.css') }}">
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
        <a href="{{ route('kalender') }}" class="active"><i class="fa-regular fa-calendar-days"></i> Kalender Akademik</a>
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
      <h3>UniPortal</h3>

      <div class="search">
        <i class="fa-solid fa-magnifying-glass"></i>
        <input type="text" placeholder="Cari kegiatan...">
      </div>

      <div class="profile">
        <i class="fa-regular fa-bell"></i>
        <img src="https://i.pravatar.cc/100?img=14" alt="user">
      </div>
    </header>

    <section class="content">

      <div class="title-row">
        <div>
          <small>Akademik > <b>Kalender</b></small>
          <h1>September 2024</h1>
          <p>Semester Ganjil 2024/2025</p>
        </div>

        <button class="download-btn">
          <i class="fa-solid fa-download"></i> Unduh Kalender
        </button>
      </div>

      <div class="main-grid">

        <div class="calendar-box">

          <div class="view-toggle">
            <button class="active">Bulan</button>
            <button>Minggu</button>
          </div>

          <div class="calendar">
            <div class="day-name">Min</div>
            <div class="day-name">Sen</div>
            <div class="day-name">Sel</div>
            <div class="day-name">Rab</div>
            <div class="day-name">Kam</div>
            <div class="day-name">Jum</div>
            <div class="day-name">Sab</div>

            <div class="date muted">25</div>
            <div class="date muted">26</div>
            <div class="date muted">27</div>
            <div class="date muted">28</div>
            <div class="date muted">29</div>
            <div class="date muted">30</div>
            <div class="date muted">31</div>

            <div class="date">1</div>
            <div class="date event-orange">2 <span>Masa KRS</span></div>
            <div class="date">3</div>
            <div class="date">4</div>
            <div class="date">5</div>
            <div class="date">6</div>
            <div class="date">7</div>

            <div class="date">8</div>
            <div class="date event-blue">9 <span>Kuliah Pertama</span></div>
            <div class="date">10</div>
            <div class="date">11</div>
            <div class="date">12</div>
            <div class="date event-green">13 <span>Wisuda XL</span></div>
            <div class="date">14</div>

            <div class="date">15</div>
            <div class="date event-red">16 <span>Maulid Nabi</span></div>
            <div class="date">17</div>
            <div class="date">18</div>
            <div class="date">19</div>
            <div class="date">20</div>
            <div class="date">21</div>

            <div class="date">22</div>
            <div class="date">23</div>
            <div class="date">24</div>
            <div class="date">25</div>
            <div class="date event-brown">26 <span>Seminar Nasional</span></div>
            <div class="date">27</div>
            <div class="date">28</div>
          </div>
        </div>

        <div class="right-panel">

          <div class="detail-card">
            <div class="detail-title">
              <h3>Detail Kegiatan</h3>
              <a href="#">Lihat Semua</a>
            </div>

            <div class="detail orange">
              <h4>2 - 6 SEPTEMBER</h4>
              <h3>Masa Pengisian KRS</h3>
              <p>Periode pengisian Kartu Rencana Studi semester ganjil.</p>
            </div>

            <div class="detail blue">
              <h4>9 SEPTEMBER</h4>
              <h3>Perkuliahan Hari Pertama</h3>
              <p>Awal perkuliahan tatap muka dan daring secara resmi.</p>
            </div>

            <div class="detail green">
              <h4>13 SEPTEMBER</h4>
              <h3>Wisuda Periode XL</h3>
              <p>Upacara wisuda untuk lulusan gelombang kedua tahun 2024.</p>
            </div>

            <div class="detail red">
              <h4>16 SEPTEMBER</h4>
              <h3>Libur Nasional</h3>
              <p>Maulid Nabi Muhammad SAW. Kampus diliburkan.</p>
            </div>
          </div>

          <div class="info-card">
            <i class="fa-solid fa-bullhorn"></i>
            <h3>Pengumuman Penting</h3>
            <p>
              Batas akhir pembayaran UKT Semester Ganjil diperpanjang
              hingga 30 September 2024.
            </p>
            <button>Detail Info</button>
          </div>

        </div>

      </div>

    </section>

  </main>

</div>

</body>
</html>