<?php

require __DIR__.'/vendor/autoload.php';

use Unitato\Init\Article;

$article = new Article();
$slugify = new \Cocur\Slugify\Slugify();

$title = 'Méerzg &, çef eznf. ! efzefoü ô';

$article
    ->setId(8)
    ->setTitle($title)
    ->setSlug($slugify->slugify($title))
    ->setStatus(Article::STATUS_PENDING)
;

var_dump($article);