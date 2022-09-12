<?php
try
{
	// On se connecte à MySQL
	$mysqlClient = new PDO('mysql:host=localhost;dbname=we_love_food;charset=utf8', 'oxyde', '686837');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table recipes
$sqlQuery = 'SELECT * FROM recipes';
$recipesStatement = $mysqlClient->prepare($sqlQuery);
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();


    ?>