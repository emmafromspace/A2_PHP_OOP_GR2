<?php

/** @var \Doctrine\ORM\EntityManager $em */
$em = require __DIR__ . '/bootstrap.php';

use Unitato\Init\Article;

/** @var \Doctrine\ORM\EntityRepository $articleRepository */
$articleRepository = $em->getRepository('Unitato\Init\Article');

$article = $articleRepository->find(1);

$em->remove($article);

$em->flush();
