<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UniPortal Login</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

  <div class="container">

    <div class="circle-bg">
      <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?q=80&w=1200&auto=format&fit=crop" alt="kampus">
    </div>

    <div class="announcement">
      <h4>● PENGUMUMAN TERBARU</h4>
      <p>
        Portal pengisian KRS Semester Genap akan dibuka mulai tanggal
        12 Februari 2024. Pastikan tagihan administrasi sudah lunas.
      </p>
    </div>

    <div class="login-card">

      <div class="logo">
        <h1><i class="fa-solid fa-cube"></i> UniPortal</h1>
        <p>Academic Management System</p>
      </div>

      <h2>Selamat Datang Kembali</h2>

      <form id="loginForm">

        <div class="input-group">
          <label>NIM atau Email</label>
          <small id="emailError" class="error-message"></small>

          <div class="input-box" id="emailBox">
            <i class="fa-regular fa-user"></i>
            <input type="text" id="email" placeholder="Masukkan NIM atau Email">
          </div>
        </div>

        <div class="input-group">
          <div class="label-row">
            <label>Kata Sandi</label>
            <a href="#">Lupa Password?</a>
          </div>

          <small id="passwordError" class="error-message"></small>

          <div class="input-box" id="passwordBox">
            <i class="fa-solid fa-lock"></i>
            <input type="password" id="password" placeholder="Masukkan Kata Sandi">
          </div>
        </div>

        <div class="remember">
          <label>
            <input type="checkbox">
            Ingat Saya
          </label>
        </div>

        <button type="submit" class="login-btn">
          Masuk ke Akun →
        </button>

        <div class="divider">
          <span>ATAU MASUK DENGAN</span>
        </div>

        <button type="button" class="google-btn">
          <i class="fa-brands fa-google"></i>
          Masuk dengan Google
        </button>

      </form>

      <div class="bottom-text">
        Belum punya akun?
        <a href="#">Hubungi Akademik</a>
      </div>

      <div class="copyright">
        © 2024 UniPortal University System. Versi 2.4.0
      </div>

    </div>

  </div>

  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>