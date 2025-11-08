<!DOCTYPE html>
<html lang="tr">
<head><meta charset="utf-8"><title><?php echo htmlspecialchars($product->name); ?></title></head>
<body>
  <h1><?php echo htmlspecialchars($product->name); ?></h1>
  <p>Fiyat: <?php echo number_format($product->price, 2); ?> TL</p>
  <p><?php echo htmlspecialchars($product->description); ?></p>
</body>
</html>
// Compare this snippet from views/error.php:
// <!DOCTYPE html>