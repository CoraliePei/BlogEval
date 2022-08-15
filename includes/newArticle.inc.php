<?php

require_once 'frmArticle.php';

$success = false;
$errors = array();
if (!empty($_POST['frmArticle'])) {
    // Faille XSS
    $titre = trim(strip_tags($_POST['titre']));
    $contenu = trim(strip_tags($_POST['contenu']));
    // $pseudo = trim(strip_tags($_POST['pseudo']));
    $statut = trim(strip_tags($_POST['statut']));
    // Validation
    $errors = validText($errors, $titre, 'titre', 3, 100);
    $errors = validText($errors, $contenu, 'contenu', 10, 1000);
    // $errors = validText($errors, $pseudo, 'pseudo', 2, 50);
    $errors = validText($errors, $statut, 'statut', 3, 10);

    if (count($errors) === 0) {
        ajouterArticle($titre, $contenu, $statut);
        $success = true;
    }
}
