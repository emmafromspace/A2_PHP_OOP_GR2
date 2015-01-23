<?php

/** @var \Doctrine\ORM\EntityManager $em */
$em = require __DIR__.'/../bootstrap.php';

$articleRepo = $em->getRepository('Unitato\Init\Article');
/** @var \Unitato\Init\Article $article */
$article = $articleRepo->find(5);

echo '<h1>'.$article->getTitle().'</h1>';
echo '<h2>Create by '.$article->getUser()->getUsername().'</h2>';