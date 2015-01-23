<?php

require __DIR__.'/vendor/autoload.php';

$config = new \Doctrine\DBAL\Configuration();

$connectionParams = [
    'dbname'    => 'unitato',
    'user'      => 'root',
    'password'  => 'toor',
    'host'      => 'localhost',
    'driver'    => 'pdo_mysql',
];

$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);

var_dump($conn->errorInfo());