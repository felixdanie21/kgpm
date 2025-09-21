<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Ulang Tahun Gereja</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- penting buat responsif -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>  
    body {
      font-family: 'Segoe UI', sans-serif;
    }
    .navbar {
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }

    /* Hero Section */
    .hero {
      background: linear-gradient(rgba(220,53,69,0.85), rgba(220,53,69,0.85)),
                  url("<?= base_url('assets/img/bg.jpg') ?>") center/cover no-repeat;
      color: white;
      padding: 40px 15px;
      text-align: center;
      border-radius: 0 0 20px 20px;
    }
    .hero h3 {
      font-size: 1.8rem;
      font-weight: bold;
      animation: fadeInDown 1.5s;
      text-transform: uppercase;
    }
    .hero p {
      font-size: 1.2rem;
      animation: fadeInUp 2s;
      text-transform: uppercase;
    }
    @keyframes fadeInDown {
      from {opacity: 0; transform: translateY(-30px);}
      to {opacity: 1; transform: translateY(0);}
    }
    @keyframes fadeInUp {
      from {opacity: 0; transform: translateY(30px);}
      to {opacity: 1; transform: translateY(0);}
    }

    /* Poster */
    .poster-card {
      border: none;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(0,0,0,0.15);
      opacity: 0;
      transform: translateY(20px);
      animation: fadeInUpCard 1s forwards;
    }
    .poster-card:nth-child(1) { animation-delay: 0.2s; }
    .poster-card:nth-child(2) { animation-delay: 0.4s; }
    .poster-card:nth-child(3) { animation-delay: 0.6s; }
    .poster-card:nth-child(4) { animation-delay: 0.8s; }

    @keyframes fadeInUpCard {
      to { opacity: 1; transform: translateY(0); }
    }

    .poster-img {
      width: 100%;
      height: 350px;
      object-fit: cover;
      transition: transform 0.3s ease-in-out;
      cursor: pointer;
    }
    .poster-img:hover {
      transform: scale(1.05);
    }

    /* Card teks */
    .card-title {
      font-size: 1.1rem;
      font-weight: bold;
    }
    .card-text {
      font-size: 1rem;
    }

    /* Kalau layar kecil (HP), teks dibesarkan */
    @media (max-width: 576px) {
      .card-title {
        font-size: 1.3rem;
      }
      .card-text {
        font-size: 1.1rem;
      }
      .hero h3 {
        font-size: 1.4rem;
      }
      .hero p {
        font-size: 1rem;
      }
    }

    .contact-section {
      background: linear-gradient(135deg, #dc3545, #ff6f61);
      color: white;
      padding: 60px 20px;
      text-align: center;
    }

    footer {
      background: #111;
      color: #bbb;
      text-align: center;
      padding: 15px 0;
      margin-top: 50px;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-light">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand d-flex align-items-center text-danger" href="#">
      <img src="<?= base_url('assets/img/logo.jpg') ?>" alt="Logo Gereja" 
           width="40" height="40" class="me-2 rounded-circle">
      Gereja KPGM
    </a>

    <!-- Tombol Hamburger -->
    <button class="navbar-toggler bg-danger" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu Navigasi -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item "><a class="nav-link text-danger" href="#lomba">Poster Lomba</a></li>
        <li class="nav-item"><a class="nav-link text-danger" href="#galeri">Galeri Kegiatan</a></li>
        <li class="nav-item"><a class="nav-link text-danger" href="#rapat">Jadwal Rapat</a></li>
        <li class="nav-item"><a class="nav-link text-danger" href="#pengumuman">Pengumuman</a></li>
        <li class="nav-item"><a class="nav-link text-danger" href="#panitia">Daftar Panitia</a></li>
      </ul>
      <!-- Tambahan teks -->
      <div class="text-danger text-end ms-3 d-none d-lg-block">
        <small>
          YESUS KRISTUS DALAM KEBANGSAAN<br>
          KEBANGSAAN DALAM YESUS KRISTUS
        </small>
      </div>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<div class="hero">
  <h3>
    Kerapatan Gereja Protestan Minahasa <br> Wilayah XXXVII Jawa
  </h3>
  <p>Panitia Hari-Hari Raya Gerejawi Tahun 2025</p>
</div>

<!-- Foto Section -->
<div class="container my-5" id="lomba">
  <div class="row g-4">
    <div class="col-12 col-md-6">
      <div class="poster-card">
        <img src="<?= base_url('assets/img/1.jpg') ?>" class="poster-img" data-bs-toggle="modal" data-bs-target="#imageModal1">
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="poster-card">
        <img src="<?= base_url('assets/img/2.jpg') ?>" class="poster-img" data-bs-toggle="modal" data-bs-target="#imageModal2">
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="poster-card">
        <img src="<?= base_url('assets/img/3.jpg') ?>" class="poster-img" data-bs-toggle="modal" data-bs-target="#imageModal3">
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="poster-card">
        <img src="<?= base_url('assets/img/4.jpg') ?>" class="poster-img" data-bs-toggle="modal" data-bs-target="#imageModal4">
      </div>
    </div>
  </div>
</div>

<!-- Galeri Kegiatan -->
<div class="container my-5" id="galeri">
  <h3 class="text-danger mb-3">GALERI KEGIATAN</h3>
  <div class="card shadow-sm">
    <div class="card-body text-center">
      <p class="text-muted">Belum ada foto kegiatan.</p>
    </div>
  </div>
</div>

<!-- Jadwal Rapat -->
<div class="container my-5" id="rapat">
  <h3 class="text-danger mb-3">JADWAL RAPAT</h3>
  <div class="card shadow-sm">
    <div class="card-body text-center">
      <p class="text-muted">Belum ada jadwal rapat.</p>
    </div>
  </div>
</div>

<!-- Pengumuman -->
<div class="container my-5" id="pengumuman">
  <h3 class="text-danger mb-3">PENGUMUMAN</h3>
  <div class="card shadow-sm">
    <div class="card-body text-center">
      <p class="text-muted">Belum ada pengumuman.</p>
    </div>
  </div>
</div>

<!-- Daftar Panitia -->
<div class="container my-5" id="panitia">
  <h3 class="text-danger mb-3">DAFTAR PANITIA</h3>
  <div class="card shadow-sm">
    <div class="card-body text-center">
      <p class="text-muted">Belum ada daftar panitia.</p>
    </div>
  </div>
</div>

<!-- Modal -->
<?php for($i=1; $i<=4; $i++): ?>
<div class="modal fade" id="imageModal<?= $i ?>" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <img src="<?= base_url("assets/img/$i.jpg") ?>" class="img-fluid">
    </div>
  </div>
</div>
<?php endfor; ?>

<!-- Hubungi Kami -->
<div class="contact-section">
  <h2>Hubungi Kami</h2>
  <p>Silakan hubungi kami melalui WhatsApp untuk informasi lebih lanjut</p>
  <a href="https://wa.me/628xxxxxxx" target="_blank" class="btn btn-success btn-lg">
    <i class="bi bi-whatsapp"></i> Chat via WhatsApp
  </a>
</div>

<!-- Footer -->
<footer>
  &copy; <?= date("Y") ?> Gereja Kita. Semua Hak Dilindungi.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
