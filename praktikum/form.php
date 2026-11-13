<?php
declare(strict_types=1);
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Profil</title>
</head>
<body>
  <main>
    <h1>Form Profil</h1>
    <form action="process.php" method="post">
      <label for="name">Nama</label>
      <input id="name" name="name" required maxlength="100">

      <label for="email">Email</label>
      <input id="email" name="email" type="email" required>

      <label for="major">Program Studi</label>
      <select id="major" name="major" required>
        <option value="">Pilih program studi</option>
        <option value="Sistem Informasi">Sistem Informasi</option>
        <option value="Teknologi Informasi">Teknologi Informasi</option>
      </select>

      <button type="submit">Simpan</button>
    </form>
  </main>
</body>
</html>