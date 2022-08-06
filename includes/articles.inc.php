<h1>Articles</h1>

<?php

// require_once 'frmArticles.php';

// if (isset($_POST['frmArticles'])) {
//     $titre = isset($_POST['titre']) ? htmlentities(trim($_POST['titre'])) : "";
//     $contenu = isset($_POST['contenu']) ? htmlentities(trim($_POST['contenu'])) : "";
//     $auteur = isset($_POST['auteur']) ? htmlentities(trim($_POST['auteur'])) : "";
//     if (verifierAdmin()) {
//         if (ajouterArticle($titre, $contenu, $auteur)) {
//             $message = "Article publié";
//         } else {
//             $message = "Erreur de publication";
//         }
//         echo $message;
//     }
// } else {
//     $titre = $contenu = $auteur = "";
//     require_once 'frmArticles.php';
// }



$connexionCategories = new Sql();
$requeteCategories = "SELECT * FROM categories";
$resultatCategories = $connexionCategories->select($requeteCategories);


$menuCategories = "<ul class=\"wrap\">";
for ($i = 0; $i < count($resultatCategories); $i++) {
    $menuCategories .= "<li>";
    $menuCategories .= "<a style=\"color: #" . $resultatCategories[$i]['couleur'] . "\" href=\"index.php?page=articles&amp;id_categorie=" . $resultatCategories[$i]['id_categorie'] . "\">";
    $menuCategories .= $resultatCategories[$i]['intitule'];
    $menuCategories .= "</a>";
    $menuCategories .= "</li>";
}
$menuCategories .= "</ul>";
echo $menuCategories;


if (!empty($_GET['id_categorie']) && ctype_digit($_GET['id_categorie'])) {
    $id_categorie = $_GET['id_categorie'];

    $requeteArticlesCate = "SELECT * FROM articles INNER JOIN articles_has_categories ON articles.id_article = articles_has_categories.articles_id_article WHERE categories_id_categorie = $id_categorie ORDER BY created_at DESC";
    $connexionArticlesCate = new Sql();
    $resultatArticles = $connexionArticlesCate->select($requeteArticlesCate);

    $menuArticlesCate = "<ul>";
    for ($i = 0; $i < count($resultatArticles); $i++) {
        $menuArticlesCate .= "<a href=\"index.php?page=articles&amp;id_categorie=" . $resultatArticles[$i]['categories_id_categorie'] . "&amp;id_article=" . $resultatArticles[$i]['id_article'] . "\">";
        $menuArticlesCate .= $resultatArticles[$i]['titre'];
        $menuArticlesCate .= "</a>";
        $menuArticlesCate .= "</li>";
    }
    $menuArticlesCate .= "</ul>";
    echo $menuArticlesCate;
} else {
    $connexionArticles = new Sql();
    $requeteArticles = $connexionArticles->select("SELECT * FROM articles");

    $menuArticles = "<ul>";
    for ($i = 0; $i < count($requeteArticles); $i++) {
        $menuArticles .= "<a href=\"index.php?page=articles&amp;id_article=" . $requeteArticles[$i]['id_article'] . "\">";
        $menuArticles .= $requeteArticles[$i]['titre'];
        $menuArticles .= "</a>";
        $menuArticles .= "</li>";
    }
    $menuArticles .= "</ul>";
    echo $menuArticles;
}
