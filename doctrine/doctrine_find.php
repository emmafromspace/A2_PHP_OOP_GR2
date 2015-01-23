<?php

/** @var \Doctrine\ORM\EntityManager $em */
$em = require __DIR__ . '/bootstrap.php';

/** @var \Doctrine\ORM\EntityRepository $articleRepo */
$articleRepo = $em->getRepository('Unitato\Init\Article');



// Ancien article
var_dump($article);

// Mise à jour
