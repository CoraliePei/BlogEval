<h1>Articles</h1>

<?php

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
$menuCategories .= "<li><a href=\"index.php?page=articles\">Tous les articles</a>";
$menuCategories .= "</ul>";
echo $menuCategories;


if (!empty($_GET['id_categorie']) && ctype_digit($_GET['id_categorie'])) {
    $id_categorie = $_GET['id_categorie'];

    $requeteArticlesCate = "SELECT * FROM articles INNER JOIN articles_has_categories ON articles.id_article = articles_has_categories.articles_id_article WHERE categories_id_categorie = $id_categorie, statut = 'publish' ORDER BY created_at DESC";
    $connexionArticlesCate = new Sql();
    $resultatArticles = $connexionArticlesCate->select($requeteArticlesCate);

    $menuArticlesCate = "<section class=\"wrap\">";
    for ($i = 0; $i < count($resultatArticles); $i++) {
        $menuArticlesCate .= "<div>";
        $menuArticlesCate .= "<h2>";
        $menuArticlesCate .= "<a href=\"index.php?page=articles&amp;id_categorie=" . $resultatArticles[$i]['categories_id_categorie'] . "&amp;id_article=" . $resultatArticles[$i]['id_article'] . "\">";
        $menuArticlesCate .= $resultatArticles[$i]['titre'];
        $menuArticlesCate .= "</a>";
        $menuArticlesCate .= "</h2>";
        $menuArticlesCate .= "<p>" . $resultatArticles[$i]['contenu'] . "</p>";
        $menuArticlesCate .= "<p>Créé le : " . $resultatArticles[$i]['created_at'] . "</p>";
        if (verifierAdmin() || verifierRedacteur()) {
            $menuArticlesCate .= "<a href=\"index.php?page=articlesEdit&amp;id_article=" . $resultatArticles[$i]['id_article'] . "\">Editer</a>";
            $menuArticlesCate .= " | ";
            $menuArticlesCate .= "<a href=\"index.php?page=articlesSuppr&amp;id_article=" . $resultatArticles[$i]['id_article'] . "\">Supprimer</a>";
        }
        $menuArticlesCate .= "</div>";
    }
    $menuArticlesCate .= "</section>";
    echo $menuArticlesCate;
} else {
    $connexionArticles = new Sql();
    $requeteArticles = $connexionArticles->select("SELECT * FROM articles");

    $menuArticles = "<section class=\"wrap\">";
    for ($i = 0; $i < count($requeteArticles); $i++) {
        $menuArticles .= "<div>";
        $menuArticles .= "<h2>";
        $menuArticles .= "<a href=\"index.php?page=articles&amp;id_article=" . $requeteArticles[$i]['id_article'] . "\">";
        $menuArticles .= $requeteArticles[$i]['titre'];
        $menuArticles .= "</a>";
        $menuArticles .= "</h2>";
        $menuArticles .= "<p>" . $requeteArticles[$i]['contenu'] . "</p>";
        $menuArticles .= "<p>Créé le : " . $requeteArticles[$i]['created_at'] . "</p>";
        if (verifierAdmin() || verifierRedacteur()) {
            $menuArticles .= "<a href=\"index.php?page=articlesEdit&amp;id_article=" . $requeteArticles[$i]['id_article'] . "\">Editer</a>";
            $menuArticles .= " | ";
            $menuArticles .= "<a href=\"index.php?page=articlesSuppr&amp;id_article=" . $requeteArticles[$i]['id_article'] . "\">Supprimer</a>";
        }
        $menuArticles .= "</div>";
    }
    $menuArticles .= "</section>";
    $menuArticles .= "</ul>";
    echo $menuArticles;
}
