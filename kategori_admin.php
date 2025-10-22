<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kategori Pengumuman</title>
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

    /* Tabel */
    .table {
      border-collapse: collapse;
      margin-bottom: 0;
    }

    .col-nama {
      background-color: #7a7171 !important;
      color: white;
    }

    .col-aksi {
      background-color: #6B2C2C !important;
      color: white;
      text-align: center;
    }

    .aksi-btn {
      background: none;
      border: none;
      font-size: 1.2rem;
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
      background-color: #2b2b2b;
      color: white;
      border-radius: 10px;
      padding: 20px;
    }

    .modal-content input, .modal-content textarea {
      background-color: #3a3a3a;
      color: white;
      border: none;
    }

    .modal-content input:focus, .modal-content textarea:focus {
      background-color: #444;
      color: white;
      box-shadow: none;
      border: 1px solid #0d6efd;
    }

    .modal-header {
      border-bottom: none;
    }

    .modal-footer {
      border-top: none;
    }

    .btn-close {
      filter: invert(1);
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
        <div class="nav-item">
          <a href="#"><i class="bi bi-house-door"></i>Dashboard</a>
        </div>
        <div class="nav-item">
          <a href="#"><i class="bi bi-megaphone"></i>Pengumuman</a>
        </div>
        <div class="nav-item active">
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
    <div class="d-flex justify-content-start align-items-center mb-3">
      <h4 class="fw-bold me-3 mb-0">Kategori</h4>
      <button class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#modalTambahKategori">+ Tambah Kategori</button>
    </div>

    <table class="table table-bordered">
      <thead>
        <tr>
          <th class="col-nama" style="width: 85%">Nama Kategori</th>
          <th class="col-aksi" style="width: 15%">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="col-nama">1. Jadwal Akademik (20 pengumuman)</td>
          <td class="col-aksi">
            <button class="aksi-btn"><i class="bi bi-pencil-fill"></i></button>
            <button class="aksi-btn"><i class="bi bi-trash-fill"></i></button>
          </td>
        </tr>
        <tr>
          <td class="col-nama">2. Perkuliahan (15 pengumuman)</td>
          <td class="col-aksi">
            <button class="aksi-btn"><i class="bi bi-pencil-fill"></i></button>
            <button class="aksi-btn"><i class="bi bi-trash-fill"></i></button>
          </td>
        </tr>
        <tr>
          <td class="col-nama">3. Ujian (12 pengumuman)</td>
          <td class="col-aksi">
            <button class="aksi-btn"><i class="bi bi-pencil-fill"></i></button>
            <button class="aksi-btn"><i class="bi bi-trash-fill"></i></button>
          </td>
        </tr>
        <tr>
          <td class="col-nama">4. Beasiswa (8 pengumuman)</td>
          <td class="col-aksi">
            <button class="aksi-btn"><i class="bi bi-pencil-fill"></i></button>
            <button class="aksi-btn"><i class="bi bi-trash-fill"></i></button>
          </td>
        </tr>
        <tr>
          <td class="col-nama">5. Kegiatan (25 pengumuman)</td>
          <td class="col-aksi">
            <button class="aksi-btn"><i class="bi bi-pencil-fill"></i></button>
            <button class="aksi-btn"><i class="bi bi-trash-fill"></i></button>
          </td>
        </tr>
        <tr>
          <td class="col-nama">6. Magang & Karier (10 pengumuman)</td>
          <td class="col-aksi">
            <button class="aksi-btn"><i class="bi bi-pencil-fill"></i></button>
            <button class="aksi-btn"><i class="bi bi-trash-fill"></i></button>
          </td>
        </tr>
        <tr>
          <td class="col-nama">7. Umum (30 pengumuman)</td>
          <td class="col-aksi">
            <button class="aksi-btn"><i class="bi bi-pencil-fill"></i></button>
            <button class="aksi-btn"><i class="bi bi-trash-fill"></i></button>
          </td>
        </tr>
      </tbody>
    </table>
  </main>

  <!-- Modal Tambah Kategori -->
  <div class="modal fade" id="modalTambahKategori" tabindex="-1" aria-labelledby="modalTambahKategoriLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-0">
          <h5 class="modal-title" id="modalTambahKategoriLabel">Penambahan Kategori Pengumuman</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="kategoriName" class="form-label">Nama Kategori</label>
              <input type="text" class="form-control" id="kategoriName" placeholder="Masukkan nama kategori">
            </div>
            <div class="mb-3">
              <label for="deskripsiKategori" class="form-label">Deskripsi</label>
              <textarea class="form-control" id="deskripsiKategori" rows="3" placeholder="Deskripsi kategori"></textarea>
            </div>
            <button type="submit" class="btn btn-light w-100">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    © 2025 PBL IFPagi1-8. All rights reserved<br>
    <div class="social-icons mt-2">
      <i class="bi bi-facebook"></i>
      <i class="bi bi-instagram"></i>
      <i class="bi bi-twitter"></i>
      <i class="bi bi-youtube"></i>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
