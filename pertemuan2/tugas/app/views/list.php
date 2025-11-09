<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Pengguna</title>
  <style>
    .container { max-width: 800px; margin: 0 auto; padding: 20px; }
    .user-table { width: 100%; border-collapse: collapse; }
    .user-table th, .user-table td { border: 1px solid #ddd; padding: 8px; text-align: left; }
    .btn-small { padding: 5px 10px; text-decoration: none; color: white; background: blue; border-radius: 3px; margin-right: 5px; }
    .btn-add { padding: 10px 15px; background: green; color: white; text-decoration: none; border-radius: 3px; display: inline-block; margin-bottom: 20px; }
    .form-section { margin-top: 20px; padding: 15px; border: 1px solid #ccc; background: #f9f9f9; display: none; }  /* Default hidden */
    .form-section.show { display: block; }  /* Show when toggled */
    .form-section h2 { margin-top: 0; }
  </style>
</head>
<body>
  <div class="container">
    <h1>Daftar Pengguna</h1>

    <!-- Link Tambah User -->
    <a href="<?= BASEURL; ?>/user?tambah=1" class="btn-add" id="btn-tambah">Tambah User</a>

    <!-- Tabel List -->
    <table class="user-table">
      <thead>
        <tr>
          <th>Nama</th>
          <th>Email</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data['users'] as $user): ?>
          <tr data-id="<?= $user['id']; ?>" data-name="<?= htmlspecialchars($user['name']); ?>" data-email="<?= htmlspecialchars($user['email']); ?>">
            <td><?= htmlspecialchars($user['name']) ?></td>
            <td><?= htmlspecialchars($user['email']) ?></td>
            <td>
              <a href="<?= BASEURL; ?>/user/detail/<?= $user['id']; ?>" class="btn-small">Detail</a>
              <a href="#" class="btn-small btn-ubah" data-id="<?= $user['id']; ?>">Ubah</a>  <!-- Ubah href ke #, tambah class dan data-id -->
              <a href="<?= BASEURL; ?>/user/hapus/<?= $user['id']; ?>" class="btn-small" onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <br><br>

    <!-- Form Tambah (Tidak Berubah) -->
    <div class="form-section" id="form-tambah" <?php if (isset($data['tambah'])) echo 'style="display: block;"'; ?>>
      <h2>Tambah Data User</h2>
      <form action="<?= BASEURL; ?>/user" method="post">
        <label for="name">Nama:</label>
        <input type="text" name="name" id="name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>
        <button type="submit">Tambah</button>
        <a href="<?= BASEURL; ?>/user" style="margin-left: 10px;">Batal</a>
      </form>
    </div>

    <!-- Form Ubah (Selalu Ada, Tapi Tersembunyi) -->
    <div class="form-section" id="form-ubah">
      <h2>Ubah Data User</h2>
      <form action="<?= BASEURL; ?>/user" method="post">
        <input type="hidden" name="id" id="ubah-id">
        <label for="name_ubah">Nama:</label>
        <input type="text" name="name" id="name_ubah" required><br><br>
        <label for="email_ubah">Email:</label>
        <input type="email" name="email" id="email_ubah" required><br><br>
        <button type="submit">Ubah</button>
        <a href="#" id="batal-ubah" style="margin-left: 10px;">Batal Ubah</a>
      </form>
    </div>
  </div>

  <!-- JavaScript untuk Toggle Form -->
  <script>
    // Toggle form tambah (tidak berubah)
    document.getElementById('btn-tambah').addEventListener('click', function(e) {
      e.preventDefault();
      const form = document.getElementById('form-tambah');
      form.classList.toggle('show');
    });

    // Toggle form ubah dan isi data dari baris tabel
    document.querySelectorAll('.btn-ubah').forEach(btn => {
      btn.addEventListener('click', function(e) {
        e.preventDefault();  // Mencegah reload
        const row = this.closest('tr');  // Ambil baris tabel
        const id = row.getAttribute('data-id');
        const name = row.getAttribute('data-name');
        const email = row.getAttribute('data-email');

        // Isi form ubah dengan data dari baris
        document.getElementById('ubah-id').value = id;
        document.getElementById('name_ubah').value = name;
        document.getElementById('email_ubah').value = email;

        // Toggle form ubah
        const form = document.getElementById('form-ubah');
        form.classList.toggle('show');
      });
    });

    // Batal ubah (sembunyikan form)
    document.getElementById('batal-ubah').addEventListener('click', function(e) {
      e.preventDefault();
      document.getElementById('form-ubah').classList.remove('show');
    });
  </script>
</body>
</html>