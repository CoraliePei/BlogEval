<?php

spl_autoload_register(function ($className) {
    require_once './classes/' . $className . '.php';
});

require_once './includes/header.php';
require_once './includes/main.php';
require_once './includes/footer.php';
