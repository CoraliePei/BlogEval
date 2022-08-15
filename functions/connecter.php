<?php

function verifierLogin($email, $mdp)
{
    if ($pdo = new Sql()) {
        if (verifierEmailUtilisateur($email)) {
            $reponse = $pdo->select("SELECT mdp FROM utilisateurs WHERE email='$email'");
            $reponse = $reponse[0]['mdp'];
            if (password_verify($mdp, $reponse))
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
