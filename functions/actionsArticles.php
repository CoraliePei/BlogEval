<?php

function ajouterArticle(string $titre, string $contenu, string $statut): bool
{
    if ($pdo = new Sql()) {
        $bindArray = array(
            "titre" => array($titre, PDO::PARAM_STR),
            "contenu" => array($contenu, PDO::PARAM_STR),
            "statut" => array($statut, PDO::PARAM_STR),
        );
        $requeteArticles = "INSERT INTO articles (titre, contenu, statut, created_at, modified_at) VALUES (:titre, :contenu, :statut, NOW(), NOW())";

        if ($pdo->insert($requeteArticles, $bindArray, true)) {
            return true;
            // INSERTION DE LA RELATION AVEC LA SESSION DE L'AUTEUR
        } else {
            return false;
        }
        return true;
    } else {
        return false;
    }
}

function validText($er, $data, $key, $min, $max)
{
    if (!empty($data)) {
        if (mb_strlen($data) < $min) {
            $er[$key] = 'min ' . $min . ' caractères';
        } elseif (mb_strlen($data) >= $max) {
            $er[$key] = 'max ' . $max . ' caractères';
        }
    } else {
        $er[$key] = 'Veuillez renseigner ce champ';
    }
    return $er;
}

function supprimerArticle($id_article)
{
    if ($pdo = new Sql()) {
        $pdo->delete("DELETE FROM articles WHERE articles.id_article = $id_article");
        return "Article $id_article définitivement supprimé.";
    }
}
