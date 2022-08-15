<h1>Login</h1>


<?php

if (isset($_POST['frmLogin'])) {
    $email = isset($_POST['email']) ? htmlentities(trim($_POST['email'])) : "";
    $mdp = isset($_POST['mdp']) ? htmlentities(trim($_POST['mdp'])) :  "";

    $erreurs = array();

    if (mb_strlen($email) === 0)
        array_push($erreurs, "Veuillez saisir votre adresse mail");

    elseif (!(filter_var($email, FILTER_VALIDATE_EMAIL)))
        array_push($erreurs, "Veuillez saisir une adresse mail conforme");

    if (mb_strlen($mdp) === 0) // ou empty
        array_push($erreurs, "Veuillez saisir votre mot de passe");

    if (count($erreurs) > 0) {
        $messageErreurs = "<ul>";

        for ($i = 0; $i < count($erreurs); $i++) {
            $messageErreurs .= "<li>";
            $messageErreurs .= $erreurs[$i];
            $messageErreurs .= "</li>";
        }

        $messageErreurs .= "</ul>";
        echo $messageErreurs;

        require './includes/frmLogin.php';
    } else {
        if (verifierLogin($email, $mdp)) {
            if ($pdo = new Sql()) {
                $datasUser = $pdo->select("SELECT * FROM utilisateurs WHERE email='$email'");
                $_SESSION['pseudo'] = $datasUser[0]['pseudo'];
                $_SESSION['email'] = $datasUser[0]['email'];
                $_SESSION['role'] = $datasUser[0]['role'];
            }

            $_SESSION['login'] = true;
            echo "<script>window.location.replace('http://localhost/Documents/BlogEval')</script>";
        } else {
            echo "Erreur dans votre login/password";
            require './includes/frmLogin.php';
        }
    }
} else {
    $email = "";
    require './includes/frmLogin.php';
}
