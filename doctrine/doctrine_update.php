<?php


/** @var \Doctrine\ORM\EntityManager $em */
$em = require __DIR__ . '/bootstrap.php';

use Unitato\Init\Article;

/** @var \Doctrine\ORM\EntityRepository $articleRepository */
$articleRepository = $em->getRepository('Unitato\Init\Article');

// Manager : permet l'update/création
// Repository : Permet de récupérer des données


// récupère l'article ayant comme id 1
$article = $articleRepository->find(1);

// Récupère tous les articles en base
$articles = $articleRepository->findAll();

// Récupère un article ayant comme title "nouveau tidkfjghdtre"
$articleByTitle = $articleRepository->findOneBy([
    'title' => 'nouveau tidkfjghdtre'
]);

// Récupère tous les articles ayant comme status 2

$articlesStatus = $articleRepository->findBy([
    'status' => 2
]);

var_dump($articlesStatus);

// Je set le nouveau titre avec la méthode créée dans la class Article
$article->setTitle('nouveau tidkfjghdtre');

// On ne met pas persist car l'entitée a été récupérée par doctrine

// Update la base
$em->flush();

$article = $articleRepository->find(1);
