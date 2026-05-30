<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <!-- ===================== META VIEWPORT ===================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - UniPortal</title>

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

<div class="login-wrapper">

  <div class="login-card">
    <!-- ===================== LOGO ===================== -->
    <div class="logo">
      <h1>UniPortal</h1>
      <p>Personal Study Planner</p>
    </div>

    <!-- ===================== JUDUL LOGIN ===================== -->
    <h2>Masuk ke Akun</h2>
    <p class="subtitle">Silakan login untuk melanjutkan</p>

    <form method="POST" action="{{ route('login.post') }}">
      @csrf
      <div class="form-group">
        <label>NIM atau Email</label>
        <small class="error-message">{{ $errors->first('nim') }}</small>
        <input type="text" name="nim" placeholder="Masukkan NIM atau Email">
    </div>
    <div class="form-group">
        <label>Password</label>
        <small class="error-message">{{ $errors->first('password') }}</small>
        <input type="password" name="password" placeholder="Masukkan Password">
    </div>
    <button type="submit">Login</button>
    </form>
  </div>

</div>

<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>