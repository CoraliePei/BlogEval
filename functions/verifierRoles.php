<?php

function verifierAdmin(): bool
{
    if (isset($_SESSION['login']) && $_SESSION['login'] === true && $_SESSION['role'] === 'admin') {
        return true;
    } else {
        return false;
    }
}

function verifierRedacteur(): bool
{
    if (isset($_SESSION['login']) && $_SESSION['login'] === true && $_SESSION['role'] === 'redacteur') {
        return true;
    } else {
        return false;
    }
}

function verifierModerateur(): bool
{
    if (isset($_SESSION['login']) && $_SESSION['login'] === true && $_SESSION['role'] === 'moderateur') {
        return true;
    } else {
        return false;
    }
}

function verifierUtilisateur(): bool
{
    if (isset($_SESSION['login']) && $_SESSION['login'] === true && $_SESSION['role'] === 'utilisateur') {
        return true;
    } else {
        return false;
    }
}
