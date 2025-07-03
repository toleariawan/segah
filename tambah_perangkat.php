<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
?>


<?php include 'header.php'; include 'koneksi.php'; ?>
<div class="container py-5">
  <h2>Tambah Perangkat Desa</h2>
  <form method="POST" enctype="multipart/form-data">
    <div class="mb-3">
      <label>Nama</label>
      <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Jabatan</label>
      <input type="text" name="jabatan" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Foto</label>
      <input type="file" name="foto" class="form-control" required>
    </div>
    <button type="submit" name="submit" class="btn btn-success">Simpan</button>
  </form>

  <?php
  if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    move_uploaded_file($tmp, "uploads/$foto");

    $koneksi->query("INSERT INTO perangkat (nama, jabatan, foto) VALUES ('$nama', '$jabatan', '$foto')");
    echo "<script>alert('Berhasil ditambahkan'); window.location='dashboard.php';</script>";
  }
  ?>
</div>
<?php include 'footer.php'; ?>
