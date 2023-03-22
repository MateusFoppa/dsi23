<?php
    require('./vendor/autoload.php');
    require('pdo.inc.php');
    $loader = new \Twig\Loader\FilesystemLoader('views');

    $twig = new \Twig\Environment($loader);