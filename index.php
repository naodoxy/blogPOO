<?php

/**
 * CE FICHIER A POUR BUT D'AFFICHER LA PAGE D'ACCUEIL !
 * 
 * On va donc se connecter à la base de données, récupérer les articles du plus récent au plus ancien (SELECT * FROM articles ORDER BY created_at DESC)
 * puis on va boucler dessus pour afficher chacun d'entre eux
 */

/**
 * 1. Connexion à la base de données avec PDO
 * Attention, on précise ici deux options :
 * - Le mode d'erreur : le mode exception permet à PDO de nous prévenir violament quand on fait une erreur ;-)
 * - Le mode d'exploitation : FETCH_ASSOC veut dire qu'on exploitera les données sous la forme de tableaux associatifs
 */
require_once __DIR__ . '/libraries/database.php';
$pdo = getPdo();

/**
 * 2. Récupération des articles
 */
$articles = findAllArticles();


/**
 * 3. Affichage
 */
require_once __DIR__ . '/libraries/utils.php';
$pageTitle = "Accueil";
render('articles/index', compact('pageTitle', 'articles'));

