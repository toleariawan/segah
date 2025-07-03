<?php include 'koneksi.php'; ?>
<?php include 'header.php'; ?>

<div class="container py-5">
  <h2 class="mb-4">Semua Artikel Blog</h2>
  <div class="row">
    <?php
    $query = $koneksi->query("SELECT * FROM blog ORDER BY tanggal DESC");
    while ($b = $query->fetch_assoc()) {
    ?>
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <img src="uploads/<?php echo $b['gambar']; ?>" class="card-img-top" style="height:200px; object-fit:cover;" alt="Gambar Blog">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title"><?php echo $b['judul']; ?></h5>
            <p class="card-text"><?php echo substr(strip_tags($b['isi']), 0, 100); ?>...</p>
            <a href="blog_detail.php?id=<?php echo $b['id']; ?>" class="btn btn-primary mt-auto">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>

<?php include 'footer.php'; ?>
