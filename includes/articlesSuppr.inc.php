<?php

if (verifierAdmin() || verifierRedacteur()) {
    if (!empty($_GET['id_article']) && ctype_digit($_GET['id_article'])) {
        $id_article = $_GET['id_article'];
        supprimerArticle($id_article);
        echo "Article supprimé";
    } else {
        return false;
    }
}
