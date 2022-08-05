<?php

function verifierUtilisateur($email)
{
    if ($pdo = new Sql()) {
        $reponse = $pdo->select("SELECT COUNT(*) FROM utilisateurs WHERE email='$email'", true);
        if ($reponse > 0) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function inscrireUtilisateur(string $pseudo, string $email, string $mdp): bool
{
    $mdp = password_hash($mdp, PASSWORD_DEFAULT);

    if ($pdo = new Sql()) {
        $bindArray = array(
            "pseudo" => array($pseudo, PDO::PARAM_STR),
            "email" => array($email, PDO::PARAM_STR),
            "mdp" => array($mdp, PDO::PARAM_STR)
        );
        $requeteInsc = "INSERT INTO utilisateurs (pseudo, email, mdp) VALUES (:pseudo, :email, :mdp)";

        if ($pdo->insert($requeteInsc, $bindArray, true))
            return true;
        else
            return false;
        return true;
    } else {
        return false;
    }
}
