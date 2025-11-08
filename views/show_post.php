<!DOCTYPE html>
<html lang="tr">
<head><meta charset="utf-8"><title><?php echo htmlspecialchars($post->title); ?></title></head>
<body>
  <h1><?php echo htmlspecialchars($post->title); ?></h1>
  <p><?php echo nl2br(htmlspecialchars($post->content)); ?></p>
</body>
</html>
