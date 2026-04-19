<?php
$items = [
    'frontend' => 'nginx:1.23-alpine',
    'backend' => 'php:7.4-fpm',
    'network' => 'internal',
];
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Containers Lab 6</title>
    <link rel="stylesheet" href="/styles.css">
</head>
<body>
    <main>
        <h1>Lab 6: PHP через nginx и php-fpm</h1>
        <p>Страница сгенерирована контейнером backend и отдана через контейнер frontend.</p>
        <ul>
            <?php foreach ($items as $name => $value): ?>
                <li><strong><?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>:</strong> <?= htmlspecialchars($value, ENT_QUOTES, 'UTF-8') ?></li>
            <?php endforeach; ?>
        </ul>
    </main>
</body>
</html>
