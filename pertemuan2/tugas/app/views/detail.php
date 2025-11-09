<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $data["judul"]; ?></title>
</head>
<body>
  <div class="container">
    <h1>Detail User</h1>

    <?php if (isset($data['user']) && !empty($data['user'])): ?>
      <p><strong>Nama:</strong> <?= htmlspecialchars($data['user']['name']) ?></p>
      <p><strong>Email:</strong> <?= htmlspecialchars($data['user']['email']) ?></p>
    <?php else: ?>
      <p style="color: red;">User dengan ID tersebut tidak ditemukan.</p>
    <?php endif; ?>

    <br>
    <a href="<?= BASEURL; ?>/user">Kembali ke Daftar</a>
  </div>
</body>
</html>