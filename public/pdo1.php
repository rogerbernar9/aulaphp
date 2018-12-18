<?php

$servidor = "db";
$user = "root";
$pass = "rootPass";
$db = "app";

$dbh = new PDO('mysql:host='.$servidor.';dbname=app', $user, $pass);


var_dump($dbh);

