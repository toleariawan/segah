<?php
session_start();
include 'koneksi.php';

if (isset($_SESSION['login'])) {
  header("Location: dashboard.php");
  exit;
}

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // ganti username/password sesuai kebutuhan
  if ($username == "admin" && $password == "admin123") {
    $_SESSION['login'] = true;
    header("Location: dashboard.php");
    exit;
  } else {
    $error = "Username atau password salah!";
  }
}
?>

<?php include 'header.php'; ?>
<div class="container py-5">
  <h2>Login Admin</h2>
  <?php if (isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
  <form method="POST">
    <div class="mb-3">
      <label>Username</label>
      <input type="text" name="username" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Password</label>
      <input type="password" name="password" class="form-control" required>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Login</button>
  </form>
</div>
<?php include 'footer.php'; ?>
