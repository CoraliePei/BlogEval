<?php

function verifierLogin($email, $motdepasse)
{
    if ($pdo = new Sql()) {
        if (verifierUtilisateur($email)) {
            $reponse = $pdo->select("SELECT mdp FROM utilisateurs WHERE email='$email'");
            $reponse = $reponse[0]['mdp'];
            if (password_verify($motdepasse, $reponse))
                return true;
            else
                return false;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
