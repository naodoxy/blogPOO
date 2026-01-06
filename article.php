<?php
require_once __DIR__ . '/libraries/utils.php';
require_once __DIR__ . '/libraries/database.php';

/**
 * 1. Récupération du param "id" et vérification de celui-ci
 */
$article_id = null;
if (!empty($_GET['id']) && ctype_digit($_GET['id'])) {
    $article_id = $_GET['id'];
}

if (!$article_id) {
    die("Vous devez préciser un paramètre `id` dans l'URL !");
}

/**
 * 2. Récupération de l'article
 */
$article = findArticle($article_id);
if (!$article) {
    die("Article introuvable !");
}

/**
 * 3. Récupération des commentaires
 */
$commentaires = findAllComments($article_id);

/**
 * 4. Affichage
 */
$pageTitle = $article['title'];
render('articles/show', compact('pageTitle', 'article', 'commentaires','article_id'));
