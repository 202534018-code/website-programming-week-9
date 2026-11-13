<?php
declare(strict_types=1);

$query = trim($_GET["query"] ?? "");
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pencarian GET</title>
</head>
<body>
  <main>
    <h1>Pencarian</h1>
    <form method="get">
      <label for="query">Kata kunci</label>
      <input id="query" name="query" value="<?= htmlspecialchars($query, ENT_QUOTES, "UTF-8") ?>">
      <button type="submit">Cari</button>
    </form>

    <?php if ($query === ""): ?>
      <p>Silakan masukkan kata kunci.</p>
    <?php else: ?>
      <p>Hasil untuk: <?= htmlspecialchars($query, ENT_QUOTES, "UTF-8") ?></p>
    <?php endif; ?>
  </main>
</body>
</html>