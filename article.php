<?php
require_once('libraries/database.php');
require_once('libraries/utils.php');
require_once('libraries/models/Article.php');
require_once('libraries/models/Comment.php');
$articleModel = new Article();
$commentModel = new Comment();

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
$article = $articleModel->findArticle($article_id);

/**
 * 3. Récupération des commentaires
 */
$commentaires= $commentModel->findAllComments($article_id);


/**
 * 4. Affichage
 */
$pageTitle = $article['title'];
render('articles/show', compact('pageTitle', 'article', 'commentaires','article_id'));
