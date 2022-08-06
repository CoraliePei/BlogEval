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
$menuCategories .= "</ul>";
echo $menuCategories;


if (!empty($_GET['id_categorie']) && ctype_digit($_GET['id_categorie'])) {
    $id_categorie = $_GET['id_categorie'];

    $requeteArticles = "SELECT * FROM articles INNER JOIN articles_has_categories ON articles.id_article = articles_has_categories.articles_id_article WHERE categories_id_categorie = $id_categorie ORDER BY created_at DESC";
    $connexionArticles = new Sql();
    $resultatArticles = $connexionArticles->select($requeteArticles);

    $menuArticles = "<ul>";
    for ($i = 0; $i < count($resultatArticles); $i++) {
        $menuArticles .= "<a href=\"index.php?page=articles&amp;id_categorie=" . $resultatArticles[$i]['categories_id_categorie'] . "&amp;id_article=" . $resultatArticles[$i]['id_article'] . "\">";
        $menuArticles .= $resultatArticles[$i]['titre'];
        $menuArticles .= "</a>";
        $menuArticles .= "</li>";
    }
    $menuArticles .= "</ul>";
    echo $menuArticles;
} else {
    echo "404";
}
