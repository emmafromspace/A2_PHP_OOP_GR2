<?php

/** @var \Doctrine\ORM\EntityManager $em */
$em = require __DIR__ . '/bootstrap.php';

use Unitato\Init\Article;

$article = new Article();

$article
    ->setTitle('Lipsum ezfzeljfnafjb azkjdnaz')
    ->setSlug('sdf-zefrth-dfezfzefez-erg')
    ->setStatus(Article::STATUS_VALIDATED)
;

$em->persist($article);

$em->flush();
