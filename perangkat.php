<?php include 'koneksi.php'; ?>
<?php include 'header.php'; ?>

<div class="container py-5">
  <h2 class="mb-4 text-center">Perangkat Desa</h2>

  <div id="carouselPerangkat" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">

    <div class="carousel-inner">
      <?php
      $perangkat = $koneksi->query("SELECT * FROM perangkat");
      $active = true;
      while ($p = $perangkat->fetch_assoc()) {
      ?>
        <div class="carousel-item <?php echo $active ? 'active' : ''; ?>">
          <div class="d-flex justify-content-center">
            <div class="card text-center" style="width: 18rem;">
              <img src="uploads/<?php echo $p['foto']; ?>" class="card-img-top" alt="<?php echo $p['nama']; ?>" style="height: 300px; object-fit: cover;">
              <div class="card-body">
                <h5 class="card-title"><?php echo $p['nama']; ?></h5>
                <p class="card-text"><?php echo $p['jabatan']; ?></p>
              </div>
            </div>
          </div>
        </div>
      <?php
        $active = false;
      }
      ?>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselPerangkat" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselPerangkat" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
</div>

<?php include 'footer.php'; ?>
