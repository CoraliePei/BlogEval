<?php

spl_autoload_register(function ($className) {
    require_once './classes/' . $className . '.php';
});


require_once './includes/header.php';

$connexionCategories = new Sql();
$requeteCategoriesNiveau1 = "SELECT * FROM utilisateurs";
$resultatCategories = $connexionCategories->select($requeteCategoriesNiveau1);
var_dump($resultatCategories);


require_once './includes/main.php';
require_once './includes/footer.php';
