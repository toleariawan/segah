<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
?>

<?php include 'header.php'; include 'koneksi.php'; ?>
<div class="container py-5">
  <h2>Tambah Artikel Blog</h2>
  <form method="POST" enctype="multipart/form-data">
    <div class="mb-3">
      <label>Judul</label>
      <input type="text" name="judul" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Isi</label>
      <textarea name="isi" rows="5" class="form-control" required></textarea>
    </div>
    <div class="mb-3">
      <label>Gambar</label>
      <input type="file" name="gambar" class="form-control" required>
    </div>
    <button type="submit" name="submit" class="btn btn-success">Simpan</button>
  </form>

  <?php
  if (isset($_POST['submit'])) {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $gambar = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];
    move_uploaded_file($tmp, "uploads/$gambar");

    $koneksi->query("INSERT INTO blog (judul, isi, gambar) VALUES ('$judul', '$isi', '$gambar')");
    echo "<script>alert('Artikel berhasil ditambahkan'); window.location='dashboard.php';</script>";
  }
  ?>
</div>
<?php include 'footer.php'; ?>
