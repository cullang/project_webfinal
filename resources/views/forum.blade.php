<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Forum Diskusi</title>
  <link rel="stylesheet" href="{{ asset('css/forum.css') }}">
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
        <a href="{{ route('informasi') }}"><i class="fa-solid fa-graduation-cap"></i> Informasi Kampus</a>
        <a href="{{ route('catatan') }}"><i class="fa-regular fa-file-lines"></i> Catatan Mahasiswa</a>
        <a href="{{ route('forum') }}" class="active"><i class="fa-regular fa-comments"></i> Forum Diskusi</a>
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
        <input type="text" placeholder="Cari topik diskusi...">
      </div>

      <div class="profile">
        <i class="fa-regular fa-bell"></i>
        <div>
          <h4>Budi Santoso</h4>
          <p>Informatika '21</p>
        </div>
        <img src="https://i.pravatar.cc/100?img=14" alt="">
      </div>
    </header>

    <section class="content">
      <div class="title-row">
        <div>
          <h1>Forum Diskusi</h1>
          <p>Berbagi informasi, bertanya, dan berdiskusi dengan sesama mahasiswa.</p>
        </div>

        <button class="topic-btn">
          <i class="fa-solid fa-square-plus"></i> Buat Topik Baru
        </button>
      </div>

      <div class="forum-grid">

        <div class="left-panel">
          <div class="category-card">
            <h4>KATEGORI</h4>
            <a class="active" href="#"><i class="fa-solid fa-infinity"></i> Semua 124</a>
            <a href="#"><i class="fa-solid fa-code"></i> Akademik 42</a>
            <a href="#"><i class="fa-solid fa-users"></i> Organisasi 35</a>
            <a href="#"><i class="fa-solid fa-book"></i> Hobi 19</a>
            <a href="#"><i class="fa-solid fa-bullhorn"></i> Informasi 28</a>
          </div>

          <div class="guide-card">
            <h3>Panduan Komunitas</h3>
            <p>Pastikan setiap diskusi tetap sopan dan mengikuti aturan akademik kampus.</p>
            <a href="#">Baca Selengkapnya →</a>
          </div>
        </div>

        <div class="middle-panel">
          <div class="tabs">
            <button class="active">Populer</button>
            <button>Terbaru</button>
            <button>Mengikuti</button>
            <button>Diskusi Saya</button>
          </div>

          <div class="post-card">
            <img src="https://i.pravatar.cc/100?img=5" alt="">
            <div>
              <div class="post-meta">
                <span>Akademik</span> • 2 jam lalu
              </div>
              <h2>Tips Membagi Waktu Antara Kuliah dan Lomba Nasional Startup Competition?</h2>
              <p>Halo teman-teman, ada yang punya pengalaman ikut lomba startup sambil kuliah?</p>
              <div class="post-info">
                <span><i class="fa-regular fa-comment"></i> 24</span>
                <span><i class="fa-regular fa-eye"></i> 1.2k</span>
                <span><i class="fa-regular fa-heart"></i> 45</span>
              </div>
            </div>
          </div>

          <div class="post-card">
            <img src="https://i.pravatar.cc/100?img=7" alt="">
            <div>
              <div class="post-meta">
                <span>Organisasi</span> • 4 hari lalu
              </div>
              <h2>Open Recruitment BEM KM: Syarat dan Ketentuan Terbaru</h2>
              <p>Pendaftaran BEM periode ini sudah dibuka! Teman-teman yang tertarik untuk...</p>
              <div class="post-info">
                <span><i class="fa-regular fa-comment"></i> 58</span>
                <span><i class="fa-regular fa-eye"></i> 3.4k</span>
                <span class="love"><i class="fa-regular fa-heart"></i> 112</span>
              </div>
            </div>
          </div>

          <div class="post-card">
            <div class="avatar-letter">R</div>
            <div>
              <div class="post-meta">
                <span>Hobi</span> • 1 Minggu lalu
              </div>
              <h2>Rekomendasi Cafe untuk Nugas Dekat Kampus?</h2>
              <p>Lagi bosan nugas di perpus, ada rekomendasi cafe yang wifi kenceng?</p>
              <div class="post-info">
                <span><i class="fa-regular fa-comment"></i> 18</span>
                <span><i class="fa-regular fa-eye"></i> 990</span>
                <span><i class="fa-regular fa-heart"></i> 29</span>
              </div>
            </div>
          </div>
        </div>

        <div class="right-panel">
          <div class="rank-card">
            <h3>TOP PENGGUNA</h3>

            <div class="rank">
              <b>1</b>
              <img src="https://i.pravatar.cc/100?img=10" alt="">
              <div>
                <h4>Zaki Ib...</h4>
                <p>350 diskusi</p>
              </div>
            </div>

            <div class="rank">
              <b>2</b>
              <img src="https://i.pravatar.cc/100?img=11" alt="">
              <div>
                <h4>Maya S...</h4>
                <p>212 diskusi</p>
              </div>
            </div>

            <div class="rank">
              <b>3</b>
              <img src="https://i.pravatar.cc/100?img=12" alt="">
              <div>
                <h4>Kevin P...</h4>
                <p>180 diskusi</p>
              </div>
            </div>
          </div>

          <div class="trend-card">
            <h3>TRENDING</h3>
            <p>#BeasiswaKampus <br><small>47 diskusi aktif</small></p>
            <p>#MagangIndustri <br><small>41 diskusi aktif</small></p>
            <p>#Wisuda2024 <br><small>33 diskusi aktif</small></p>
          </div>
        </div>

      </div>
    </section>
  </main>
</div>

</body>
</html>