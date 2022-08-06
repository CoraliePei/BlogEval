<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration Alibobo</title>
    <link href="./assets/css/style.css" rel="stylesheet" />
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php?page=accueil">Accueil</a></li>
                <li><a href="index.php?page=articles">Articles</a></li>
                <li><a href="index.php?page=apropos">À propos</a></li>
                <li><a href="index.php?page=newArticle">Nouvel article</a></li>
                <li><a href="index.php?page=adminUsers">Gestion des Utilisateurs</a></li>

                <?php
                if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
                    echo '<li><a href="index.php?page=logout">Déconnexion</a></li>';
                } else {
                    echo '<li><a href="index.php?page=login">Se connecter</a></li>';
                }
                ?>
            </ul>
        </nav>
        <?php
        if (isset($_SESSION['pseudo'])) {
            echo "<p>Bienvenue " . $_SESSION['pseudo'] . "</p>";
        }
        ?>
    </header>