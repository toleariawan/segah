<?php include 'koneksi.php'; ?>
<?php include 'header.php'; ?>

<div class="container py-5">
  <?php
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM blog WHERE id=$id");
    if ($row = mysqli_fetch_assoc($query)) {
  ?>
    <h2 class="mb-3"><?php echo $row['judul']; ?></h2>
    <p class="text-muted"><?php echo date('d M Y', strtotime($row['tanggal'])); ?></p>
    <img src="uploads/<?php echo $row['gambar']; ?>" class="img-fluid mb-4" alt="Gambar Blog">
    <div class="content">
      <?php echo nl2br($row['isi']); ?>
    </div>
  <?php
    } else {
      echo "<p>Blog tidak ditemukan.</p>";
    }
  } else {
    echo "<p>Parameter tidak valid.</p>";
  }
  ?>
</div>

<?php include 'footer.php'; ?>
