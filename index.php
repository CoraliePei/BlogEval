<?php

spl_autoload_register(function ($className) {
    require_once './classes/' . $className . '.php';
});

require_once './functions/autoLoad.php';
autoLoad("*.php");

require __DIR__ . '/vendor/autoload.php';

// Définir le fuseau horaire dans lequel le serveur se trouve
date_default_timezone_set('Europe/Paris');

require_once './includes/header.php';
require_once './includes/main.php';
require_once './includes/footer.php';
