<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Profil Pengguna</title>
  <link rel="stylesheet" href="{{ asset('css/settings.css') }}">
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
        <a href="{{ route('forum') }}"><i class="fa-regular fa-comments"></i> Forum Diskusi</a>
      </nav>
    </div>

    <div class="bottom-menu">
      <a href="{{ route('settings') }}" class="active"><i class="fa-solid fa-gear"></i> Settings</a>
      <a href="{{ route('login') }}"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
    </div>
  </aside>

  <main class="main">

    <header class="topbar">
      <div class="search">
        <i class="fa-solid fa-magnifying-glass"></i>
        <input type="text" placeholder="Cari info akademik...">
      </div>

      <div class="profile-top">
        <i class="fa-regular fa-bell"></i>
        <img src="https://i.pravatar.cc/100?img=12" alt="user">
        <div>
          <h4>Budi Santoso</h4>
          <p>210103442</p>
        </div>
      </div>
    </header>

    <section class="content">

      <div class="title-row">
        <div>
          <h1>Profil Pengguna</h1>
          <p>Kelola informasi pribadi dan pengaturan akademik Anda.</p>
        </div>

        <div class="action-buttons">
          <button class="edit-btn">Edit Profil</button>
          <button class="save-btn">Simpan Perubahan</button>
        </div>
      </div>

      <div class="profile-grid">

        <div class="left-column">

          <div class="profile-card">
            <div class="avatar-box">
              <img src="https://i.pravatar.cc/200?img=12" alt="profile">
              <button><i class="fa-solid fa-camera"></i></button>
            </div>

            <h2>Budi Santoso</h2>
            <p>Teknik Informatika</p>

            <div class="badges">
              <span>Semester 5</span>
              <span>Aktif</span>
            </div>

            <div class="line"></div>

            <div class="student-info">
              <div>
                <small>NIM</small>
                <h4>210103442</h4>
              </div>

              <div>
                <small>ANGKATAN</small>
                <h4>2021</h4>
              </div>
            </div>
          </div>

          <div class="academic-card">
            <h3><i class="fa-solid fa-chart-simple"></i> Informasi Akademik</h3>

            <div class="academic-item">
              <span>Indeks Prestasi Kumulatif (IPK)</span>
              <b>3.85</b>
            </div>

            <div class="progress">
              <div></div>
            </div>

            <div class="academic-item">
              <span>SKS Terlampaui</span>
              <b>94 / 144</b>
            </div>

            <div class="academic-item">
              <span>Dosen Wali</span>
              <b>Dr. Ir. Heryanto</b>
            </div>
          </div>

        </div>

        <div class="right-column">

          <div class="detail-card">
            <h3><i class="fa-regular fa-user"></i> Detail Personal</h3>

            <div class="form-grid">
              <div>
                <label>Nama Lengkap</label>
                <input type="text" value="Budi Santoso">
              </div>

              <div>
                <label>Email Institusi</label>
                <input type="text" value="budi.santoso@uniportal.ac.id">
              </div>

              <div>
                <label>Nomor Telepon</label>
                <input type="text" value="+62 812 3456 7890">
              </div>

              <div>
                <label>Tempat, Tanggal Lahir</label>
                <input type="text" value="Jakarta, 14 Mei 2002">
              </div>
            </div>
          </div>

          <div class="small-grid">

            <div class="notification-card">
              <h3><i class="fa-regular fa-bell"></i> Notifikasi</h3>

              <div class="toggle-row">
                <span>Update Akademik</span>
                <label class="switch">
                  <input type="checkbox" checked>
                  <span></span>
                </label>
              </div>

              <div class="toggle-row">
                <span>Reminder Tugas</span>
                <label class="switch">
                  <input type="checkbox" checked>
                  <span></span>
                </label>
              </div>

              <div class="toggle-row">
                <span>Email Berita Kampus</span>
                <label class="switch">
                  <input type="checkbox">
                  <span></span>
                </label>
              </div>
            </div>

            <div class="security-card">
              <h3><i class="fa-solid fa-shield-halved"></i> Privasi & Keamanan</h3>

              <div class="security-item">
                <i class="fa-solid fa-lock"></i>
                <span>Ganti Kata Sandi</span>
                <i class="fa-solid fa-chevron-right"></i>
              </div>

              <div class="security-item">
                <i class="fa-solid fa-shield"></i>
                <span>Autentikasi 2-Faktor</span>
                <i class="fa-solid fa-chevron-right"></i>
              </div>
            </div>

          </div>

          <div class="login-card">
            <div>
              <i class="fa-solid fa-clock-rotate-left"></i>
              <div>
                <h4>Login Terakhir</h4>
                <p>Hari ini, 08:42 WIB • Jakarta, ID</p>
              </div>
            </div>

            <a href="#">Lihat Semua Aktivitas</a>
          </div>

        </div>

      </div>

    </section>

  </main>

</div>

</body>
</html>