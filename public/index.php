<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Calculator;

$calculator = new Calculator();
$a = 5;
$b = 3;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>php-app-devops</title>
</head>
<body>
    <h1>Selamat datang di php-app-devops</h1>
    <p>Aplikasi ini dideploy otomatis melalui pipeline CI/CD Jenkins + Docker.</p>
    <h2>Demo Kalkulator</h2>
    <ul>
        <li><?= $a ?> + <?= $b ?> = <?= $calculator->add($a, $b) ?></li>
        <li><?= $a ?> - <?= $b ?> = <?= $calculator->subtract($a, $b) ?></li>
        <li><?= $a ?> x <?= $b ?> = <?= $calculator->multiply($a, $b) ?></li>
        <li><?= $a ?> / <?= $b ?> = <?= round($calculator->divide($a, $b), 2) ?></li>
    </ul>
</body>
</html>
