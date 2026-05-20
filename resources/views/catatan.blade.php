<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catatan Mahasiswa</title>

  <link rel="stylesheet" href="{{ asset('css/catatan.css') }}">
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
        <a href="{{ route('catatan') }}" class="active"><i class="fa-regular fa-file-lines"></i> Catatan Mahasiswa</a>
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
        <input type="text" placeholder="Cari catatan...">
      </div>

      <div class="profile">
        <i class="fa-regular fa-bell"></i>
        <div>
          <h4>Budi Santoso</h4>
          <p>Informatika '21</p>
        </div>
        <img src="https://i.pravatar.cc/100?img=14" alt="user">
      </div>
    </header>

    <section class="content">

      <div class="title-row">
        <div>
          <h1>Catatan Mahasiswa</h1>
          <p>Kelola materi kuliah dan referensi belajarmu di satu tempat.</p>
        </div>

        <button class="add-btn">
          <i class="fa-solid fa-plus"></i> Buat Catatan Baru
        </button>
      </div>

      <h3 class="section-heading">
        <i class="fa-solid fa-thumbtack"></i> Catatan Utama
      </h3>

      <div class="featured-grid">

        <div class="featured-card blue-line">
          <div class="card-top">
            <span class="tag blue">Pemrograman Web</span>
            <small>Diperbarui 2 jam lalu</small>
          </div>

          <h2>Implementasi REST API dengan Node.js & Express</h2>
          <p>
            Membahas tentang arsitektur REST, penggunaan middleware untuk autentikasi JWT,
            dan integrasi database...
          </p>

          <div class="card-footer">
            <div class="avatars">
              <span>RK</span>
              <span>JS</span>
            </div>

            <div class="icons">
              <i class="fa-solid fa-pen"></i>
              <i class="fa-solid fa-star active-star"></i>
            </div>
          </div>
        </div>

        <div class="featured-card green-line">
          <div class="card-top">
            <span class="tag green">Kecerdasan Buatan</span>
            <small>Diperbarui Kemarin</small>
          </div>

          <h2>Neural Networks: Konsep Backpropagation</h2>
          <p>
            Penjelasan mendalam mengenai algoritma optimasi untuk melatih jaringan saraf tiruan
            melalui kalkulasi...
          </p>

          <div class="card-footer">
            <p><i class="fa-solid fa-paperclip"></i> 2 Lampiran</p>

            <div class="icons">
              <i class="fa-solid fa-pen"></i>
              <i class="fa-solid fa-star active-star"></i>
            </div>
          </div>
        </div>

      </div>

      <div class="filter-row">
        <button class="active">Semua</button>
        <button>Pemrograman Web</button>
        <button>Basis Data</button>
        <button>Kecerdasan Buatan</button>
        <button>Etika Profesi</button>
        <button class="filter-icon"><i class="fa-solid fa-sliders"></i></button>
      </div>

      <div class="note-grid">

        <div class="note-card">
          <span class="tag yellow">BASIS DATA</span>
          <h3>Normalisasi 1NF ke 3NF</h3>
          <p>
            Langkah-langkah praktis dalam menyederhanakan data pada sistem database relasional.
          </p>

          <div class="note-footer">
            <small>12 Okt 2023</small>
            <div>
              <i class="fa-solid fa-pen"></i>
              <i class="fa-solid fa-trash"></i>
              <i class="fa-regular fa-star"></i>
            </div>
          </div>
        </div>

        <div class="note-card">
          <span class="tag blue">PEMROGRAMAN WEB</span>
          <h3>Tailwind CSS vs Bootstrap</h3>
          <p>
            Perbandingan efisiensi development, ukuran file, dan fleksibilitas kustomisasi UI.
          </p>

          <div class="note-footer">
            <small>10 Okt 2023</small>
            <div>
              <i class="fa-solid fa-pen"></i>
              <i class="fa-solid fa-trash"></i>
              <i class="fa-regular fa-star"></i>
            </div>
          </div>
        </div>

        <div class="note-card">
          <span class="tag green">ETIKA PROFESI</span>
          <h3>UU ITE dan Keamanan Data</h3>
          <p>
            Poin-poin penting dalam regulasi digital di Indonesia yang berkaitan dengan privasi pengguna.
          </p>

          <div class="note-footer">
            <small>08 Okt 2023</small>
            <div>
              <i class="fa-solid fa-pen"></i>
              <i class="fa-solid fa-trash"></i>
              <i class="fa-regular fa-star"></i>
            </div>
          </div>
        </div>

        <div class="add-topic">
          <i class="fa-solid fa-circle-plus"></i>
          <h3>Tambah Topik Baru</h3>
          <p>Kategorikan catatanmu</p>
        </div>

      </div>

    </section>

  </main>

</div>

</body>
</html>