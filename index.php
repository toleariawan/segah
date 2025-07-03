<?php include 'koneksi.php'; ?>
<?php include 'header.php'; ?>

<div class="container py-5">
  <h1 class="mb-4">Selamat Datang di Website Resmi Desa</h1>
  <p class="lead">
    Website ini menyajikan informasi resmi dari pemerintah desa, termasuk berita terkini, pengumuman penting, dan layanan publik. Kami berkomitmen untuk memberikan transparansi dan kemudahan akses informasi kepada masyarakat.
  </p>

  <hr class="my-5">

  <h2 class="mb-4">Artikel Terbaru</h2>
  <div class="row">
    <?php
    $blog = $koneksi->query("SELECT * FROM blog ORDER BY tanggal DESC LIMIT 3");
    while ($b = $blog->fetch_assoc()) {
    ?>
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <img src="uploads/<?php echo $b['gambar']; ?>" class="card-img-top" style="height:200px;object-fit:cover;" alt="Gambar Blog">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title"><?php echo $b['judul']; ?></h5>
            <p class="card-text"><?php echo substr(strip_tags($b['isi']), 0, 100); ?>...</p>
            <a href="blog_detail.php?id=<?php echo $b['id']; ?>" class="btn btn-primary mt-auto">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>

  <div class="text-end mt-3">
    <a href="blog.php" class="btn btn-outline-primary">Lihat Semua Artikel</a>
  </div>
</div>

<?php include 'footer.php'; ?>
