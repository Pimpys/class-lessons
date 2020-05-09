<?php
date_default_timezone_set('Europe/Kiev');
chdir(dirname(__DIR__));
require 'vendor/autoload.php';
use App\Controller;

$view = Controller::createView();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title><?= $view->getTitle() ?></title>
</head>
<body class="background-secondary">
<?= require 'inc/header.php' ?>
<div class="paper container">
    <h1><?= $view->getTitle() ?></h1>
    <p>На этом сайте, мы изучаем PHP</p>
    <div class="row flex-right background-success">
        <div class="md-12 col">
            <?php require_once $view->getContent() ?>
        </div>
    </div>
</div>
<footer>
    <p class="text-center">
        ©Copyrignt Супер пупер сайт, разработка на PHP 7+; Сегодня: <?= date('Y-m-d H:i:s') ?>
    </p>
</footer>
</body>
</html>
