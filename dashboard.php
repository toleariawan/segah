<?php include 'koneksi.php'; ?>
<?php include 'header.php'; ?>

<div class="container py-5">
  <h2 class="mb-4 text-center">Dashboard Admin</h2>

  <div class="row g-4 justify-content-center">

    <div class="col-md-4">
      <a href="tambah_blog.php" class="text-decoration-none">
        <div class="card text-center shadow-sm border-0 h-100 bg-gradient bg-primary text-white">
          <div class="card-body py-4">
            <i class="bi bi-journal-richtext fs-1 mb-3"></i>
            <h5 class="card-title">Kelola Blog</h5>
            <p class="card-text">Tambah, ubah, dan hapus artikel blog.</p>
          </div>
        </div>
      </a>
    </div>

    <div class="col-md-4">
      <a href="tambah_perangkat.php" class="text-decoration-none">
        <div class="card text-center shadow-sm border-0 h-100 bg-gradient bg-success text-white">
          <div class="card-body py-4">
            <i class="bi bi-people fs-1 mb-3"></i>
            <h5 class="card-title">Kelola Perangkat</h5>
            <p class="card-text">Tambah dan atur perangkat desa.</p>
          </div>
        </div>
      </a>
    </div>

    <div class="col-md-4">
      <a href="profil.php" class="text-decoration-none">
        <div class="card text-center shadow-sm border-0 h-100 bg-gradient bg-warning text-dark">
          <div class="card-body py-4">
            <i class="bi bi-house-door fs-1 mb-3"></i>
            <h5 class="card-title">Profil Desa</h5>
            <p class="card-text">Edit informasi profil desa.</p>
          </div>
        </div>
      </a>
    </div>

  </div>
</div>

<?php include 'footer.php'; ?>
