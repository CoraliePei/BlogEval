<h1>Page d'accueil</h1>

<?php
$testSql = new Sql();
$selectpseudo = $testSql->select("SELECT * FROM utilisateurs");

dump($selectpseudo);

// $toast = array('pseudo' => ['Shieldfishy', PDO::PARAM_STR], 'email' => ['shieldfish@gmail.com', PDO::PARAM_STR], 'mdp' => ['shieldfish33', PDO::PARAM_STR]);

// dump($toast);


// $test2 = new Sql();
// $addpseudo = $testSql->insert("INSERT INTO utilisateurs (pseudo, email, mdp) VALUES 
// (ShieldFishy, ShieldFishy@gmail.com, ShieldFishy33)", array('pseudo' => ['Shieldfishy', PDO::PARAM_STR], 'email' => ['shieldfish@gmail.com', PDO::PARAM_STR], 'mdp' => ['shieldfish33', PDO::PARAM_STR]), true);

// dump($addpseudo);
// echo ($addpseudo);


$bindArray = array(
    "pseudo" => array("ShieldFishy", PDO::PARAM_STR),
    "email" => array("ShieldFishy@gmail.com", PDO::PARAM_STR),
    "mdp" => array("ShieldFishy33", PDO::PARAM_STR)
);

$toto = new Sql();
$requeteTest = "INSERT INTO utilisateurs (pseudo, email, mdp) VALUES (:pseudo, :email, :mdp)";

if ($toto->insert($requeteTest, $bindArray, true))
    dump($bindArray);
else
    echo "raté";


$pdo = new Sql();
$response = $pdo->select("SELECT COUNT(*) FROM utilisateurs WHERE email='blabla@gmail.com'", true);
dump($response);
