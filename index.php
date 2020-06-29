<?php
require_once 'modeles/IEtudiants.php';
require_once 'modeles/Etudiants.php';
require_once 'libs/Router.php';

$etudiant = new Etudiants();

$router= new Router;
$router->route();