<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pengumuman</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    html, body {
      height: 100%;
      background-color: #f7f7f7;
      font-family: 'Segoe UI', sans-serif;
      display: flex;
      flex-direction: column;
    }

    /* Navbar */
    .navbar {
      background-color: #d9d9d9;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 8px 40px;
    }

    .navbar-left {
      display: flex;
      align-items: center;
      gap: 40px;
    }

    .navbar-brand img {
      height: 40px;
    }

    .nav-menu {
      display: flex;
      gap: 30px;
      align-items: center;
    }

    .nav-item a {
      text-decoration: none;
      color: #333;
      font-size: 0.9rem;
      transition: color 0.3s;
    }

    .nav-item a:hover,
    .nav-item.active a {
      color: #0d6efd;
    }

    .nav-item i {
      display: block;
      font-size: 1.3rem;
      margin-bottom: 3px;
    }

    .user-icon {
      font-size: 1.8rem;
      color: #555;
      cursor: pointer;
    }

    main {
      flex: 1;
    }

    /* Kolom warna penuh */
    .table thead th.col-kategori,
    .table tbody td.col-kategori {
      background-color: #554141 !important;
      color: white;
      text-align: center;
    }

    .table thead th.col-aksi,
    .table tbody td.col-aksi {
      background-color: #6B2C2C !important;
      color: white;
      text-align: center;
    }

    .aksi-btn {
      background: none;
      border: none;
      font-size: 1.3rem;
      margin: 0 4px;
      cursor: pointer;
      color: white;
    }

    .aksi-btn:hover {
      transform: scale(1.2);
    }

    /* Footer */
    footer {
      width: 100%;
      background-color: #111;
      color: #ddd;
      padding: 15px 0;
      text-align: center;
      font-size: 0.9rem;
      margin-top: auto;
    }

    .social-icons i {
      font-size: 1.3rem;
      margin: 0 10px;
      color: white;
      cursor: pointer;
    }

    .social-icons i:hover {
      color: #0d6efd;
    }

    /* Modal */
    .modal-content {
      background-color: #222;
      color: white;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0,0,0,0.4);
    }

    .modal-header {
      border-bottom: none;
      text-align: center;
      width: 100%;
    }

    .modal-header h5 {
      margin: 0 auto;
      font-size: 1.5rem;
      font-weight: bold;
    }

    .form-control {
      background-color: #333;
      color: white;
      border: 1px solid #555;
    }

    .form-control:focus {
      background-color: #333;
      color: white;
      border-color: #0d6efd;
      box-shadow: none;
    }

    .btn-submit {
      background-color: #0d6efd;
      color: white;
      width: 100%;
    }

    .btn-submit:hover {
      background-color: #0b5ed7;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar">
    <div class="navbar-left">
      <div class="navbar-brand">
        <img src="logopolibatam.png" alt="Logo">
      </div>

      <div class="nav-menu">
        <div class="nav-item active">
          <a href="#"><i class="bi bi-house-door"></i>Dashboard</a>
        </div>
        <div class="nav-item">
          <a href="#"><i class="bi bi-megaphone"></i>Pengumuman</a>
        </div>
        <div class="nav-item">
          <a href="#"><i class="bi bi-star"></i>Kategori</a>
        </div>
        <div class="nav-item">
          <a href="#"><i class="bi bi-people"></i>Mahasiswa</a>
        </div>
        <div class="nav-item">
          <a href="#"><i class="bi bi-file-earmark-bar-graph"></i>Laporan</a>
        </div>
      </div>
    </div>

    <div class="navbar-right">
      <i class="bi bi-bell me-3 user-icon"></i>
      <i class="bi bi-person-circle user-icon"></i>
    </div>
  </nav>

  <!-- Konten -->
  <main class="container my-4">
    <h4 class="fw-bold">Pengumuman</h4>
    <button class="btn btn-secondary btn-sm mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah">
      + Tambah Pengumuman
    </button>

    <table class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 65%">Nama Pengumuman</th>
          <th class="col-kategori" style="width: 20%">Kategori</th>
          <th class="col-aksi" style="width: 15%">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1. Jadwal UAS Semester Ganjil</td>
          <td class="col-kategori">Ujian</td>
          <td class="col-aksi">
            <button class="aksi-btn"><i class="bi bi-pencil-fill"></i></button>
            <button class="aksi-btn"><i class="bi bi-trash-fill"></i></button>
          </td>
        </tr>
        <tr>
          <td>2. Beasiswa unggulan dibuka</td>
          <td class="col-kategori">Beasiswa</td>
          <td class="col-aksi">
            <button class="aksi-btn"><i class="bi bi-pencil-fill"></i></button>
            <button class="aksi-btn"><i class="bi bi-trash-fill"></i></button>
          </td>
        </tr>
        <tr>
          <td>3. Perubahan Ruang kuliah GU702</td>
          <td class="col-kategori">Perkuliahan</td>
          <td class="col-aksi">
            <button class="aksi-btn"><i class="bi bi-pencil-fill"></i></button>
            <button class="aksi-btn"><i class="bi bi-trash-fill"></i></button>
          </td>
        </tr>
      </tbody>
    </table>
  </main>

  <!-- Modal Tambah Pengumuman -->
  <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 id="modalTambahLabel">Penambahan Pengumuman</h5>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label class="form-label">Judul Pengumuman</label>
              <input type="text" class="form-control" placeholder="Masukkan judul pengumuman">
            </div>
            <div class="mb-3">
              <label class="form-label">Kategori</label>
              <select class="form-control">
                <option value="">Pilih kategori</option>
                <option>Ujian</option>
                <option>Beasiswa</option>
                <option>Perkuliahan</option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label">Isi Pengumuman</label>
              <textarea class="form-control" rows="3" placeholder="Masukkan isi pengumuman"></textarea>
            </div>
            <button type="submit" class="btn btn-submit mt-2">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    © 2025 PBL IFPagi-8. All rights reserved<br>
    <div class="social-icons mt-2">
      <i class="bi bi-facebook"></i>
      <i class="bi bi-instagram"></i>
      <i class="bi bi-twitter"></i>
      <i class="bi bi-globe"></i>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
